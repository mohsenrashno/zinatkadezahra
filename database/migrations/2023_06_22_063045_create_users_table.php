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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
			$table->string('phonenumber')->unique();
=======
			$table->string('email')->unique();
>>>>>>> detached-head
			$table->string('password');
			$table->string('name')->nullable();
			$table->string('address')->nullable();
			$table->enum('role', ['admin', 'tailor', 'customer']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
