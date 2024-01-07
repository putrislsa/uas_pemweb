@extends('layout.admin')

@section ('content')

<body>
    <br>
    <br>
    <h1 class="text-center mb-4 mt-4">Tambah Data Pegawai</h1>

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-9">
                <div class="card">
                    <div class="card-body">
                        <form action="/insertdata" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama_pegawai" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                <input type="text" name="alamat_pegawai" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">No Telpon</label>
                                <input type="number" name="no_hp_pegawai" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Status</label>
                                <input type="text" name="status" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                                <input type="text" name="keterangan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>

                            <!-- <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Masukan Foto</label>
                                <input type="file" name="foto"class="form-control">
                            </div> -->

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>


                    </div>
                </div>

</body>
@endsection