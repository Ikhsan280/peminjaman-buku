@extends('adminlte::page')

@section('title','Anggota Baru')

@section('content_header')

<br>
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Daftar Anggota</div>
                <div class="card-body">
                    <form action="{{route('anggota.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Kode Anggota</label>
                            <input type="text" name="kode_anggota" class="form-control @error('kode_anggota') is-invalid @enderror">
                            <label for="">Nama Anggota</label>
                            <input type="text" name="nama_anggota" class="form-control @error('nama_anggota') is-invalid @enderror">
                            <label for="">Jenis Kelamin</label>
                            <select name="jk_anggota" class="form-control @error('jk_anggota') is-invalid @enderror">
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                            <label for="">Jurusan</label>
                            <select name="jurusan_anggota" class="form-control @error('jurusan_anggota') is-invalid @enderror">
                                <option value="RPL">RPL</option>
                                <option value="TBSM">TBSM</option>
                                <option value="TKR">TKR</option>

                            </select>
                            <label for="">no_telp</label>
                            <input type="number" name="no_telp_anggota" class="form-control @error('no_telp_anggota') is-invalid @enderror">
                            <label for="">Alamat</label>
                            <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror">

                            @error('nama_anggota')

                            <span class="invalid-feedbaack" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group right">
                            <button type="reset" class="btn btn-outline-danger">Reset</button>
                            <button type="submit" class="btn btn-outline-primary">Simpan</button>
                        </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
</div>

@endsection

@section('css')

@endsection

@section('js')

@endsection
