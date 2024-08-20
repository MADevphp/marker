<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderResource;
use App\Http\Resources\ProductResource;
use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Product;
use App\Models\Stock;
use App\Models\UserAddress;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $order = Order::all();

        return $this->response(OrderResource::collection(auth()->user()->orders()));
    }

    public function store(StoreOrderRequest $request)
    {
        $sum = 0;
        $products = [];
        $notFoUndProducts = [];


        if (UserAddress::find($request->address)) {
            $address = UserAddress::find($request->address);
        } else {
            return response()->json([
                "message" => "Address not found"
            ]);
        }

        foreach ($request['products'] as $requestProduct) {
            $product = Product::with('stocks')->findOrFail($requestProduct['product_id']);
            $product->quantity = $requestProduct['quantity'];

            if (
                $product->stocks()->find($requestProduct['stock_id']) &&
                $product->stocks()->find($requestProduct['stock_id'])->quantity >= $requestProduct['quantity']
            ) {
                $productResource = new ProductResource($product->withStock($requestProduct['stock_id']));
                $sum += $productResource['price'];
                $products[] = $productResource->resolve();
            } else {
                $requestProduct['we_have'] = $product->stocks()->find($requestProduct['stock_id'])->quantity;
                $notFoUndProducts[] = $requestProduct;
            }
        }

        if ($notFoUndProducts === [] && $products !== [] && $sum !== 0) {
            $order = auth()->user()->orders()->create([
                'comment' => $request->commit,
                'delivery_method_id' => $request->delivery_method_id,
                'payment_type_id' => $request->payment_type_id,
                'sum' => $sum,
                'status_id' => in_array($request['payment_type_id'], [1, 2]) ? 9 : 10,
                'address' => $address,
                'products' => $products
            ]);

            if ($order) {
                foreach ($products as $product) {
                    $stock = Stock::find($product['inventory'][0]['id']);
                    $stock->quantity -= $product['order_quantity'];
                    $stock->save();
                }
            }

            return $this->success('order created', [$order]);
        } else {
            return $this->error("bu maxsulotdan qolmagan", $notFoUndProducts);
        }
    }

    public function show(Order $order)
    {
        return $order;
    }


    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    public function destroy(Order $order)
    {
        //
    }
}
