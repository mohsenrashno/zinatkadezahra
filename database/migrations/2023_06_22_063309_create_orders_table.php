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
			$table->unsignedBigInteger('user_id');
			$table->foreign('user_id')->references('id')->on('users');
			$table->date('orderdate');
			$table->date('canceleddate')->nullable();
			$table->date('paiddate')->nullable();
			$table->date('preparingdate')->nullable();
			$table->date('finisheddate')->nullable();
			$table->date('posteddate')->nullable();
			$table->date('deliverydate')->nullable();
			$table->enum('paidstatus',['درگاه اینترنتی', 'کارت', 'حساب بانکی', 'نقد'])->nullable();
			$table->string('price')->nullable();
			
			
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
