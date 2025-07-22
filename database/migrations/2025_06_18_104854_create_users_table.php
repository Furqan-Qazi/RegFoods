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
            $table->bigIncrements('user_id'); 
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');

            // Add role_id foreign key
            $table->unsignedBigInteger('role_id');

            // Foreign key constraint
            $table->foreign('role_id')->references('role_id')->on('roles')->onDelete('cascade');

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
