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
        Schema::create('order_product', function (Blueprint $table) {
            $table->id();
			$table->unsignedBigInteger('order_id');
			$table->unsignedBigInteger('product_id');
			$table->unsignedBigInteger('user_id');
<<<<<<< HEAD
			$table->foreign('order_id')->references('id')->on('orders');
			$table->foreign('product_id')->references('id')->on('products');
			$table->foreign('user_id')->references('id')->on('users');
=======
			$table->unsignedBigInteger('count');
			$table->foreign('order_id')->references('id')->on('orders');
			$table->foreign('product_id')->references('id')->on('products');
			$table->foreign('user_id')->references('id')->on('users')->nullable();
>>>>>>> detached-head
			$table->string('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_product');
    }
};
