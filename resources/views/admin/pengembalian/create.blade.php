@extends('adminlte::page')

@section('title','Tambah pengembalian')

@section('content_header')

<br>
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Input Data Pengembalian</div>
                <div class="card-body">
                   <form action="{{route('pengembalian.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                      <div class="form-group">
                            <label for="">Tanggal Pengembalian</label>
                            <input type="date" name="tanggal_pengembalian" class="form-control @error('jumlah') is-invalid @enderror">
                             @error('jumlah')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                       <div class="form-group">
                            <label for="">Denda</label>
                            <input type="number" name="denda" class="form-control @error('denda') is-invalid @enderror">
                             @error('denda')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Jumlah Kembali</label>
                            <input type="number" name="jumlah" class="form-control @error('jumlah') is-invalid @enderror">
                             @error('jumlah')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                            <div class="form-group">
                            <label for="">Id Buku</label>
                            <select name="buku_id" class="form-control @error('buku_id') is-invalid @enderror" >
                                @foreach($buku as $data)
                                    <option value="{{$data->id}}">{{$data->judul_buku}}</option>
                                @endforeach
                            </select>
                            @error('buku_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Id Anggota</label>
                            <select name="anggota_id" class="form-control @error('anggota_id') is-invalid @enderror" >
                                @foreach($anggota as $data)
                                    <option value="{{$data->id}}">{{$data->nama_anggota}}</option>
                                @endforeach
                            </select>
                            @error('anggota_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Id Petugas</label>
                            <select name="petugas_id" class="form-control @error('petugas_id') is-invalid @enderror" >
                                @foreach($petugas as $data)
                                    <option value="{{$data->id}}">{{$data->nama_petugas}}</option>
                                @endforeach
                            </select>
                            @error('petugas_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
</div>




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

@section('css')

@endsection

@section('js')

@endsection
