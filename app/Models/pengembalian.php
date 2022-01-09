<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengembalian extends Model
{
    use HasFactory;

    protected $visible=['id','  ','judul_buku','penulis_buku','penerbit_buku','stok'];
    protected $fillable=['id','  ','judul_buku','penulis_buku','penerbit_buku','stok'];
    public $timestamps =true;

    public function book()
    {
        $this->hasMany('App\Models\BookPengembalian','id_buku');
     }
}
