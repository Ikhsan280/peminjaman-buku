@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Anggota</div>
                    <div class="card-body">
                        <form action="{{ route('anggota.update', $anggota->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="">Kode Anggota</label>
                                <input type="text" name="kode_anggota" value="{{ $anggota->kode_anggota }}"
                                    class="form-control @error('kode_anggota') is-invalid @enderror">
                                @error('kode_anggota')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Nama Anggota</label>
                                <input type="text" name="nama_anggota" value="{{ $anggota->nama_anggota }}"
                                    class="form-control @error('nama_anggota') is-invalid @enderror">
                                @error('nama_anggota')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <input type="text" name="jk_anggota" value="{{ $anggota->jk_anggota }}"
                                    class="form-control @error('jk_anggota') is-invalid @enderror">
                                @error('jk_anggota')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Jurusan</label>
                                <input type="text" name="jurusan_anggota" value="{{ $anggota->jurusan_anggota }}"
                                    class="form-control @error('jurusan_anggota') is-invalid @enderror">
                                @error('jurusan_anggota')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">No Telepon</label>
                                <input type="text" name="no_telp_anggota" value="{{ $anggota->no_telp_anggota }}"
                                    class="form-control @error('no_telp_anggota') is-invalid @enderror">
                                @error('no_telp_anggota')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" name="alamat" value="{{ $anggota->alamat }}"
                                    class="form-control @error('alamat') is-invalid @enderror">
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                                <button type="submit" class="btn btn-outline-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
