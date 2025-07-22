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
    Schema::create('billing_addresses', function (Blueprint $table) {
        $table->bigIncrements('billing_addresse_id');

      
        $table->unsignedBigInteger('user_id')->nullable();

        $table->string('first_name');
        $table->string('last_name');
        $table->string('company_name')->nullable();
        $table->string('street_address');
        $table->string('apartment_suite')->nullable();
        $table->string('city');
        $table->string('state');
        $table->string('zip');
        $table->string('phone');
        $table->string('email');
        $table->text('additional_info')->nullable();

        $table->timestamps();

        // Foreign key constraint (set null if user deleted)
        $table->foreign('user_id')->references('user_id')->on('users')->onDelete('set null');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billing_addresses');
    }
};
