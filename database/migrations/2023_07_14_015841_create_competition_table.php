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
        Schema::create('competition', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('desk');
            $table->boolean('teamreq');
            $table->float('hargadaftar');
            $table->date('tgldaftar');
            $table->date('tutupdaftar');
            $table->date('tglmulai');
            $table->date('akhiracara');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('competition');
    }
};
