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
    Schema::create('payment_details', function (Blueprint $table) {
        $table->bigIncrements('payment__id');

        $table->unsignedBigInteger('order_id');

        $table->string('card_holder_name');
        $table->string('card_number');
        $table->string('country');

        $table->enum('payment_method', ['visa', 'mastercard', 'paypal', 'stripe'])->default('stripe');
        $table->enum('payment_status', ['pending', 'paid', 'failed'])->default('pending');

        $table->timestamps();

        $table->foreign('order_id')->references('order_id')->on('orders')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_details');
    }
};
