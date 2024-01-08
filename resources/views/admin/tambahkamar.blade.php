@extends('layout.admin')

@section ('content')

<body>
    <br>
    <br>
    <h1 class="text-center mb-4 mt-4">Tambah Data Kamar</h1>

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="/insertdatakamar" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Kamar</label>
                                <input type="text" name="nama_kamar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tipe Kamar</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Pilih</option>
                                    <option value="Deluxe">Deluxe</option>
                                    <option value="Superior">Superior</option>
                                    <option value="Signature">Signature</option>
                                    <option value="Standar">Standar</option>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Masukan Foto</label>
                                <input type="file" name="foto" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jumlah Kamar</label>
                                <input type="text" name="jumlah_kamar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Harga Kamar</label>
                                <input type="number" name="harga_kamar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                                <input type="text" name="deskripsi_kamar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>


                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>


                    </div>
                </div>
</body>
@endsection