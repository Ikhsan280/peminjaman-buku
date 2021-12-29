@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')

<br>
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    @include('layouts._flash')
                   <b>Data Buku</b>
                    <a href="{{route('anggota.create')}}" class="btn btn-sm btn-outline-primary float-right"><i>Tambah Buku</i></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th><i>Id Anggota</i></th>
                                <th><i>Kode Anggota</i></th>
                                <th><i>Nama Anggota</i></th>
                                <th><i>Jenis Kelamin</i></th>
                                <th><i>Jurusan Anggota</i></th>
                                <th><i>No Telepon</i></th>
                                <th><i>Alamat</i></th>
                                <th><i>Setting</i></th>


                            </tr>
                            @php $no=1; @endphp
                            @foreach ($anggota as $data)
                             <tr>
                                 <td>{{$no++}}</td>
                                 <td>{{$data->kode_anggota}}</td>
                                 <td>{{$data->nama_anggot}}</td>
                                 <td>{{$data->penulis_buku}}</td>
                                 <td>{{$data->penerbit_buku}}</td>
                                 <td>{{$data->tahun_penerbit}}</td>
                                 <td>{{$data->stok}}</td>





                                 <td>
                                     <form action="{{route('buku.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{route('buku.edit',$data->id)}}" class="btn btn-outline-info">Edit</a>
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapusnya')">HAPUS</button>
                                        </form>
                                 </td>
                             </tr>
                            @endforeach
                        </table>
                    </div>
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
