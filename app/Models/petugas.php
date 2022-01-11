<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class petugas extends Model
{
    use HasFactory;

    protected $visible=['id_petugas','nama_petugas','jabatan_petugas','no_telp','alamat'];
    protected $fillable=['id_petugas','nama_petugas','jabatan_petugas','no_telp','alamat'];
    public $timestamps =true;

    public function pinjam()
    {
        $this->belongsto('App\Models\petugas','id_petugas');
     }
}
