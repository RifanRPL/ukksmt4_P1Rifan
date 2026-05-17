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
        Schema::create('peminjamen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('peminjam_id')->constrained('users')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('alat_id')->constrained()->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('petugas_id')->nullable()->constrained('users')->onUpdate('cascade')->onDelete('restrict');
            $table->enum('status',['disetujui', 'pending', 'ditolak']);
            $table->date('tanggal_peminjaman');
            $table->date('batas_waktu')->nullable();
            $table->string('tujuan');
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */

    public function down(): void
    {
        Schema::dropIfExists('peminjamen');
    }
};
