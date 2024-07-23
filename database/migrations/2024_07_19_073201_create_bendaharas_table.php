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
        Schema::create('bendaharas', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->foreginId('user_id');
            $table->string('nama_pengaju');
            $table->text('deskripsi');
            $table->integer('total');
            $table->string('status_dana');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bendaharas');
    }
};
