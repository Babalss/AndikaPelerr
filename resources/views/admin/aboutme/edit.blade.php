@extends('layouts.admin.master')

@section('title', 'Edit About Me')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Admin • Edit About Me</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Profil</h6>
        </div>
        <div class="card-body">
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control"
                                   placeholder="Muhammad Iqbal Alghozi">
                        </div>

                        <div class="form-group mb-3">
                            <label>NBI / NIM</label>
                            <input type="text" name="nbi" class="form-control"
                                   placeholder="1462300096">
                        </div>

                        <div class="form-group mb-3">
                            <label>Deskripsi</label>
                            <textarea name="description" rows="4" class="form-control"
                                      placeholder="Hii Saya mahasiswa dari Universitas 17 Agustus 1945 Surabaya"></textarea>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label>Foto Profil</label>
                            <input type="file" name="photo" class="form-control">
                            <small class="text-muted">Gambar bulat 150x150 seperti di tampilan.</small>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Simpan Profil</button>
            </form>
        </div>
    </div>
@endsection
