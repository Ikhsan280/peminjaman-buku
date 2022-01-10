@extends('adminlte::page')

@section('title','Petugas Baru')

@section('content_header')

<br>
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Daftar Petugas Baru</div>
                <div class="card-body">
                    <form action="{{route('petugas.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Petugas</label>
                            <input type="text" name="nama_petugas" class="form-control @error('nama_petugas') is-invalid @enderror">
                            <label for="">Jabatan</label>
                            <input type="text" name="jabatan_petugas" class="form-control @error('jabatan_petugas') is-invalid @enderror">
                            <label for="">No Telepon</label>
                            <input type="text" name="no_telp" class="form-control @error('no_telp') is-invalid @enderror">
                            <label for="">Alamat</label>
                            <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror">

                            @error('nama_petugas')

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
