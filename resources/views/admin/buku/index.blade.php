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
                   <b>Data Supplier</b>
                    <a href="{{route('buku.create')}}" class="btn btn-sm btn-outline-primary float-right"><i>Tambah Supplier</i></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th><i>Id</i></th>
                                <th><i>Nama Supplier</i></th>
                                <th><i>Alamat</i></th>
                                <th><i>No Telp</i></th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach ($supplier as $data)
                             <tr>
                                 <td>{{$no++}}</td>
                                 <td>{{$data->nama_supplier}}</td>
                                 <td>{{$data->alamat}}</td>
                                 <td>{{$data->no_wa}}</td>



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
