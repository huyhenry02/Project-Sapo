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
        Schema::create('informations', function (Blueprint $table) {
            $table->bigIncrements('id'); // Mã công ty
            $table->string('company_name', 255); // Tên công ty
            $table->string('service_charge_value', 255); // Thuế kho (%)
            $table->string('vat_charge_value', 255); // Thuế VAT(%
            $table->string('address', 255); // Địa chỉ
            $table->string('phone', 255); // Số điện thoại
            $table->string('country', 255); // Quốc gia
            $table->string('currency', 255); // Đơn vị tiền tệ
            $table->text('message'); // Lời nhắn
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informations');
    }
};
