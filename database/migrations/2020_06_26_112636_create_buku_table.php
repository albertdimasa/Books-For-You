<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->string('gambarBuku');
            $table->string('judul',45);
            $table->string('pengarang',45);
            $table->string('penerbit',45);
            $table->date('tahun_terbit');
            $table->text('sinopsis');
            $table->foreignId('id_pemilik_buku')->constrained('akun');
            $table->char('status', 1)->default('0');
            // 0 = buku tidak sedang dipinjam
            // 1 = buku sedang dipinjam
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
        Schema::dropIfExists('buku');
        
        
    }
}
