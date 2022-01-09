<?php

namespace App\Http\Controllers;

use App\Models\pinjam;
use App\Models\anggpta;
use App\Models\Buku;

use Illuminate\Http\Request;

class PinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pinjam = Pinjam::all();
        return view('admin.peminjaman.index', compact('pinjam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.peminjaman.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_peminjaman' => 'required',
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required',
            'id_buku' => 'required',
            'id_anggota' => 'required',
            'id_petugas' => 'required',
          ]);
          $pinjam = new Pinjam;
          $pinjam->id_peminjaman = $request->id_peminjaman;
          $pinjam->tanggal_pinjam = $request->tanggal_pinjam;
          $pinjam->tanggal_kembali = $request->tanggal_kembali;
          $pinjam->id_buku = $request->id_buku;
          $pinjam->id_anggota = $request->id_anggota;
          $pinjam->id_petugas = $request->id_petugas;

          $book->save();
        return redirect()->route('book.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function show(pinjam $pinjam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function edit(pinjam $pinjam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pinjam $pinjam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function destroy(pinjam $pinjam)
    {
        //
    }
}
