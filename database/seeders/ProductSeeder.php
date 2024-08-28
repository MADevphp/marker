<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::factory()->count(50)->create();

        foreach ($products as $product) {
            $product->stocks()->create([
                'quantity' => rand(20, 50),

                'attributes' => json_encode([
                    [
                        'attribute_id' => 1,
                        'value_id' => rand(1, 5)
                    ],
                    [
                        'attribute_id' => 2,
                        'value_id' => rand(6, 8)
                    ],
                    [
                        'attribute_id' => 3,
                        'value_id' => rand(9, 12)
                    ],
                ])
            ]);

            $product->stocks()->create([
                'quantity' => rand(20, 50),

                'attributes' => json_encode([
                    [
                        'attribute_id' => 1,
                        'value_id' => rand(1, 5)
                    ],
                    [
                        'attribute_id' => 2,
                        'value_id' => rand(6, 8)
                    ],
                    [
                        'attribute_id' => 3,
                        'value_id' => rand(9, 12)
                    ],
                ])
            ]);

            $product->stocks()->create([
                'quantity' => rand(20, 50),

                'attributes' => json_encode([
                    [
                        'attribute_id' => 1,
                        'value_id' => rand(1, 5)
                    ],
                    [
                        'attribute_id' => 2,
                        'value_id' => rand(6, 8)
                    ],
                    [
                        'attribute_id' => 3,
                        'value_id' => rand(9, 12)
                    ],
                ])
            ]);

            $product->stocks()->create([
                'quantity' => rand(20, 50),

                'attributes' => json_encode([
                    [
                        'attribute_id' => 1,
                        'value_id' => rand(1, 5)
                    ],
                    [
                        'attribute_id' => 2,
                        'value_id' => rand(6, 8)
                    ],
                    [
                        'attribute_id' => 3,
                        'value_id' => rand(9, 12)
                    ],
                ])
            ]);
        }
    }
}
