<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
    use HasFactory;

    protected $visible=['id_anggota','kode_anggota','nama_anggota','jk_anggota','jurusan_anggota','no_telp_anggota','alamat'];
    protected $fillable=['id_anggota','kode_anggota','nama_anggota','jk_anggota','jurusan_anggota','no_telp_anggota','alamat'];
    public $timestamps =true;

    public function pinjams()
    {
        $this->hasMany('App\Models\anggota','id_anggota');
     }
}
