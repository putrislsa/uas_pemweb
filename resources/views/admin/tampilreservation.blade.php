@extends('layout.admin')

@section('content')

<body>
    <h1 class="text-center mb-4">Update Data Kamar</h1>

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-9">
                <div class="card">
                    <div class="card-body">
                        <form action="/updatedatareservation/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->nama_pegawai }}">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->alamat_pegawai }}">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Check In</label>
                                <input type="date" name="check_in" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->jumlah_kamar }}">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Check Out</label>
                                <input type="date" name="check_out" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->harga_kamar }}">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jumlah Kamar</label>
                                <input type="text name=" jumlah_kamar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->deskripsi_kamar }}">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tipe Kamar</label>
                                <select class="form-select" name="tipe_kamar" aria-label="Default select example">
                                    <option selected>{{ $data->tipe_kamar }}"</option>
                                    <option value="Deluxe">Deluxe</option>
                                    <option value="Superior">Superior</option>
                                    <option value="Signature">Signature</option>
                                    <option value="Standar">Standar</option>
                            </div>

                            <!-- <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                                <input type="text" name="keterangan"class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $data->keterangan }}">
                            </div> -->
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>


                    </div>
                </div>

</body>

@endsection