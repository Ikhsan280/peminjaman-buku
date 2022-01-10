@extends('adminlte::page')

@section('title','Petugas')

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
                    <a href="{{route('petugas.create')}}" class="btn btn-sm btn-outline-primary float-right"><i>Tambah Petugas</i></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th><i>ID Petugas</i></th>
                                <th><i>Nama Petugas</i></th>
                                <th><i>Jabatan</i></th>
                                <th><i>No Telepon</i></th>
                                <th><i>Alamat</i></th>

                            </tr>
                            @php $no=1; @endphp
                            @foreach ($petugas as $data)
                             <tr>
                                 <td>{{$no++}}</td>
                                 <td>{{$data->nama_petugas}}</td>
                                 <td>{{$data->jabatan_petugas}}</td>
                                 <td>{{$data->no_telp_petugas}}</td>
                                 <td>{{$data->alamat}}</td>




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
