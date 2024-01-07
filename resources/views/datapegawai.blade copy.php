@extends('layout.admin')

@section('content')
<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Data Pegawai</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Data Pegawai</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <div class="container">
        <a href="/tambahpegawai" class="btn btn-success">Tambah +</a>
          <div class="row">
            @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                 {{$message}}
            </div>
            @endif
          <table class="table">
      <thead>
        <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <!-- <th scope="col">Foto</th> -->
      <th scope="col">Alamat</th>
      <th scope="col">No Telp</th>
      <th scope="col">Status</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Dibuat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @php
      $no =1;
    @endphp
    @foreach($data as $row)
    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td>{{$row->nama_pegawai}}</td>
      <!-- <td>
        <img src="{{ asset('fotopegawai/'.$row->foto) }}" alt="" style="width: 60px;"">
      </td> -->
      <td>{{$row->alamat_pegawai}}</td>
      <td>0{{$row->no_hp_pegawai}}</td>
      <td>{{$row->status}}</td>
      <td>{{$row->keterangan}}</td>
      <td>{{$row->created_at->format('D M Y')}}</td>
      <td>
        <a href ="/tampilkandata/{{$row->id}}" class="btn btn-warning">Update</a>
        <a href= "/delete/{{$row->id}}" class="btn btn-danger">Delete</a
      </td>
    </tr>
    @endforeach


      </tbody>
    </table>
      </div>
    </div>
</div>
@endsection












