<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = "buku";
    protected $fillable = ['judul','pengarang','penerbit','tahun_terbit','sinopsis','gambarBuku', 'id_pemilik_buku','status'];

    public function user()
	{
	      return $this->belongsTo('App\User','akun_id', 'id');
    }
}
