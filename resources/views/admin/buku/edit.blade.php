@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Buku</div>
                    <div class="card-body">
                        <form action="{{ route('buku.update', $buku->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="">Kode Buku</label>
                                <input type="text" name="kode_buku" value="{{ $buku->kode_buku }}"
                                    class="form-control @error('kode_buku') is-invalid @enderror">
                                @error('kode_buku')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Judul Buku</label>
                                <input type="text" name="judul_buku" value="{{ $buku->judul_buku }}"
                                    class="form-control @error('judul_buku') is-invalid @enderror">
                                @error('judul_buku')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Penulis</label>
                                <input type="text" name="penulis_buku" value="{{ $buku->penulis_buku }}"
                                    class="form-control @error('penulis_buku') is-invalid @enderror">
                                @error('penulis_buku')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Penerbit</label>
                                <input type="text" name="penerbit_buku" value="{{ $buku->penerbit_buku }}"
                                    class="form-control @error('penerbit_buku') is-invalid @enderror">
                                @error('penerbit_buku')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Tahun Terbit</label>
                                <input type="number" name="tahun_penerbit" value="{{ $buku->tahun_penerbit }}"
                                    class="form-control @error('tahun_penerbit') is-invalid @enderror">
                                @error('tahun_penerbit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Stok</label>
                                <input type="number" name="stok" value="{{ $buku->stok }}"
                                    class="form-control @error('stok') is-invalid @enderror">
                                @error('stok')
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
