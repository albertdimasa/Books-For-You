<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akun', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama',45);
            $table->char('nim',10) -> nullable();
            $table->string('prodi', 40)->nullable();
            $table->string('nomorHp', 13)->nullable();
            $table->string('alamat', 125)->nullable();
            $table->string('email', 255)->unique();
            $table->string('google_id')->nullable();
            $table->string('password')->default(bcrypt('12345678'));
            $table->string('gambar')->default('default.png');
            $table->rememberToken();
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
        Schema::dropIfExists('akun');
    }
}
