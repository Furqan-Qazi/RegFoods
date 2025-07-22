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
    Schema::create('testimonials', function (Blueprint $table) {
    $table->bigIncrements('testimonials_id');
    $table->string('name');
    $table->string('image')->nullable(); // image filename/path
    $table->text('message');
    $table->timestamps();
});

    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
