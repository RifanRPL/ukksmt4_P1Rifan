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
            $table->integer('nik');
            $table->string('nama',255);
            $table->integer('no_hp');
            $table->string('alamat',255);
            $table->date('tanggal_lahir');
            $table->string('email',255);
            $table->string('password',255);
            $table->enum('role',['admin', 'peminjam', 'petugas']);
            $table->integer('credit_score');
            $table->tinyInteger('ban_status');
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
