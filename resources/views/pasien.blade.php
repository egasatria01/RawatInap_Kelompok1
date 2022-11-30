@extends('layout.admin')

@section('content')

<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Pasien</h1>
</div>
<div class="card-body">
            <button class="btn btn-primary" data-toggle="modal" data-target="#tambahBukuModal">
                <i class="fa fa-plus">   Tambah Data</i>
            </button>
            <table id="table-data" class="table table-bordered">
                <thead>
                    <div class="modal fade" id="" tabindex="-1" aria-labelledby="" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class= "modal-title" id="exampleModalLabel">Tambah Data Buku</5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="judul">Judul Buku</label>
                                            <input type="text"class="form-control" name="judul" id="judul" required/>
                                        </div>
                                        <div class="form-group">
                                        <label for="penulis">penulis</label>
                                            <input type="text"class="form-control" name="penulis" id="penulis" required/>
                                        </div>
                                        <div class="form-group">
                                        <label for="tahun">Tahun</label>
                                            <input type="year"class="form-control" name="tahun" id="tahun" required/>
                                        </div>
                                        <div class="form-group">
                                        <label for="penerbit">Penerbit</label>
                                            <input type="text"class="form-control" name="penerbit" id="penerbit" required/>
                                        </div>
                                        <div class="form-group">
                                        <label for="cover">Cover</label>
                                            <input type="file"class="form-control" name="cover" id="cover" required/>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </thead>
            </table>
        </div>
</div>
<div class="container-fluid">
    <div class="card card-default">
        <div class="card-body">
            <table id="table-data" class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>Kode Pasien</th>
                        <th>Nama Pasien</th>
                        <th>Umur</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>
@endsection
