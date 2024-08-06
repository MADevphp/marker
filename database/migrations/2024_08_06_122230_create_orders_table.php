<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->text('comment')->nullable();
            $table->foreignId('delivery_method_id')->nullable()->constrained('delivery_methods');
            $table->foreignId('payment_type_id')->constrained('payment_types');
            $table->unsignedBigInteger('sum');
            $table->json('address')->nullable();
            $table->json('products');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};