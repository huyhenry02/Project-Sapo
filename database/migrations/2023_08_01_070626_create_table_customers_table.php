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
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email', 255);
            $table->string('firstname', 255);
            $table->string('lastname', 255);
            $table->string('phone',255);
            $table->string('address',255);
            $table->string('total',255);
            $table->integer('gender');
            $table->unsignedBigInteger('order_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers.');
    }
};
