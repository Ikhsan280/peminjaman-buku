<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $visible=['id_buku','kode_buku','judul_buku','penulis_buku','penerbit_buku','stok'];
    protected $fillable=['id_buku','kode_buku','judul_buku','penulis_buku','penerbit_buku','stok'];
    public $timestamps =true;

    public function buku()
    {
        $this->hasMany('App\Models\Buku','id_buku');
     }
}
