<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('akun_id_peminjam')->constrained('akun')->onDelete('cascade')->nullable();
            $table->integer('buku_id')->nullable();
            $table->integer('akun_id_pemilik')->nullable();
            // $table->foreignId('buku_id')->constrained('buku')->onDelete('cascade')->nullable()->index();
            $table->date('tanggal_peminjaman');
            $table->date('tanggal_pengembalian');
            $table->char('status', 1)->default('0'); 
            // 0 = menunggu konfirmasi pemilik buku untuk dipinjam
            // 1 = disetujui
            // 2 = tidak disetujui
            $table->timestamps();

        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjaman');
        
        
    }
}
