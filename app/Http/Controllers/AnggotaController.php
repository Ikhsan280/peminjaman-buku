<?php

namespace App\Http\Controllers;

use App\Models\anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota = Buku::all();
        return view('admin.anggota.index', compact('anggota'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $anggota = Anggota::all();
        return view('admin.anggota.create', compact('buku'));
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
            'id' => 'required',
            'kode_anggota' => 'required',
            'nama_anggota' => 'required',
            'jk_anggota' => 'required ',
            'jurusan_anggota' => 'required',
            'no_telp_anggota' => 'required',
            'alamat' => 'required ',
        ]);
         $anggota = new anggota;
        $anggota->id = $request->id;
        $anggota->kode_anggota = $request->kode_anggota;
        $anggota->nama_anggota = $request->nama_anggota;
        $anggota->jk_anggota = $request->jk_anggota;
        $anggota->jurusan_anggota = $request->jurusan_anggota;
        $anggota->no_telp_anggota = $request->no_telp_anggota;
        $anggota->alamat = $request->alamat;
        $anggota->save();
        return redirect()->route('anggota.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function show($id )
    {
        $anggota = Anggota::findOrFail($id);
        return view('admin.anggota.show', compact('anggota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function edit(anggota $anggota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, anggota $anggota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function destroy(anggota $anggota)
    {
        //
    }
}
