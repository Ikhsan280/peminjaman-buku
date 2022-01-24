<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pinjam extends Model
{
    use HasFactory;

    protected $visible=['id_peminjam','tanggal_pinjam','tanggal_kembali','buku_id','anggota_id','petugas_id'];
    protected $fillable=['id_peminjam','tanggal_pinjam','tanggal_kembali','buku_id','anggota_id','petugas_id'];
    public $timestamps =true;

    public function bukus()
    {
        // data dari model "book" bisa dimiliki oleh model "author"
        // melalui fk "authoe_id"
        return $this->belongsTo('App\Models\Buku','buku_id');
    }

    public function anggotas()
    {
        // data dari model "book" bisa dimiliki oleh model "author"
        // melalui fk "authoe_id"
        return $this->belongsTo('App\Models\Anggota','anggota_id');
    }
    public function petugas()
    {
        // data dari model "book" bisa dimiliki oleh model "author"
        // melalui fk "authoe_id"
        return $this->belongsTo('App\Models\petugas','petugas_id');

    }

}
