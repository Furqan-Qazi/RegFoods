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
    Schema::create('reservations', function (Blueprint $table) {
        $table->bigIncrements('reservation_id');

        $table->unsignedBigInteger('user_id')->nullable();


        $table->string('name'); 
        $table->string('email'); 
        $table->string('phone'); 
        $table->integer('number_of_people'); 
        $table->date('reservation_date'); 
        $table->string('reservation_time'); // instead of ->time()
        $table->timestamps();

               $table->foreign('user_id')
              ->references('user_id')->on('users')
              ->onDelete('cascade');
    });
}



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
