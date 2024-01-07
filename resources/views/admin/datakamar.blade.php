@extends('layout.admin')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Kamar</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Kamar</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <div class="container">
    <a href="/tambahkamar" class="btn btn-success">Tambah +</a>
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
            <th scope="col">Foto</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Harga</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Tipe Kamar</th>
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
            <td>{{$row->nama_kamar}}</td>
            <td>
              <img src="{{ asset('fotokamar/'.$row->foto) }}" alt="" style="border: 3px solid whitesmoke" "width: 100px" height="200px;">
            </td>
            <td>{{$row->jumlah_kamar}}</td>
            <td>{{$row->harga_kamar}}</td>
            <td>{{$row->deskripsi_kamar}}</td>
            <td>{{$row->tipe_kamar}}</td>
            <td>{{$row->created_at->format('D M Y')}}</td>
            <td>
              <a href=" /tampilkandata/{{$row->id}}" class="btn btn-warning">Update</a>
            </td>
            <td>
              <a href="/deletekamar/{{$row->id}}" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach


        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection