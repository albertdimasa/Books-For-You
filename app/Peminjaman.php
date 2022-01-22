<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
	protected $table = "peminjaman";
	protected $fillable = ['akun_id_peminjam','buku_id','akun_id_pemilik','tanggal_peminjaman','tanggal_pengembalian','status'];
    
}
