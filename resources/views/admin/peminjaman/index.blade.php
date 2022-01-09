@extends('adminlte::page')

@section('title','Peminjaman')

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
                    <a href="{{route('peminjaman.create')}}" class="btn btn-sm btn-outline-primary float-right"><i>Tambah Peminjam</i></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th><i>ID Peminjam</i></th>
                                <th><i>Tanggal Pinjam</i></th>
                                <th><i>Tanggal Kembali</i></th>
                                <th><i>Id_Buku</i></th>
                                <th><i>Id Anggota</i></th>
                                <th><i>Id Petugas</i></th>


                            </tr>
                            @php $no=1; @endphp
                            @foreach ($pinjam as $data)
                             <tr>
                                 <td>{{$no++}}</td>
                                 <td>{{$data->id_peminjam}}</td>
                                 <td>{{$data->tanggal_pinjam}}</td>
                                 <td>{{$data->tanggal_kembali}}</td>
                                 <td>{{$data->id_buku->judul_buku}}</td>
                                 <td>{{$data->id_anggota->nama_anggota}}</td>
                                 <td>{{$data->id_petugas->nama_petugas}}</td>





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
