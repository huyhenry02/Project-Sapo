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
            $table->bigIncrements('id'); // Mã quyền
            $table->string('bill_no', 255); // Mã hóa đơn (VD:BILPR-0001)
            $table->string('customer_name', 255); // Tên khách hàng
            $table->string('customer_address', 255); // Địa chỉ khách hàng
            $table->string('customer_phone', 255); // Số điện thoại khách hàng
            $table->string('date_time', 255); // Thời gian tạo
            $table->string('gross_amount', 255); // Giá ban đầu
            $table->string('service_charge_rate', 255); // Thuế kho
            $table->string('service_charge', 255); // Thuế kho(thành tiền)
            $table->string('vat_charge_rate', 255); // Thuế VAT
            $table->string('vat_charge', 255); // Thuế VAT(thành tiền)
            $table->string('net_amount', 255); // Tổng tiền
            $table->string('discount', 255); // Giảm giá
            $table->integer('paid_status'); // Tình trạng thanh toán
            $table->integer('user_id'); // Mã tài khoản(người dùng)
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
