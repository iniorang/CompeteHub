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
            $table->string('nama');
            $table->string('email')->unique();
            //$table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('alamat')->nullable();
            $table->string('notelp')->nullable();
            $table->tinyInteger('type')->default(0);
            $table->unsignedBigInteger('team_id')->nullable();
            // Jenis User 0.User biasa, 1.admin 2.super admin
            $table->boolean('isActive')->default(0);
            $table->rememberToken();
            $table->timestamps();
           //$table->foreign('team_id')->references('id')->on('team')->onDelete('set null');
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
