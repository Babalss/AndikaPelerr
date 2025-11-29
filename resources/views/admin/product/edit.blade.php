@extends('layouts.admin.master')

@section('title', 'Edit Product')

@section('content')
<div class="container-fluid">

    {{-- HEADER --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Admin • Edit Product</h1>
        <a href="{{ route('product') }}" class="btn btn-sm btn-secondary" target="_blank">
            <i class="fas fa-external-link-alt mr-1"></i> Lihat Halaman
        </a>
    </div>

    {{-- JUDUL HALAMAN --}}
    <div class="row">
        <div class="col-lg-8 col-xl-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Judul Halaman</h6>
                </div>
                <div class="card-body">
                    <form action="#" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label>Judul (misal: Portfolio)</label>
                            <input type="text" name="page_title" class="form-control"
                                   placeholder="Portfolio">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan Judul</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- CARD PRODUCT --}}
    <div class="row">

        {{-- CARD 1 --}}
        <div class="col-xl-4 col-lg-6 mb-4">
            <div class="card shadow h-100">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Card 1</h6>
                </div>
                <div class="card-body">
                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label>Judul</label>
                            <input type="text" name="card1_title" class="form-control"
                                   placeholder="lorem ipsum">
                        </div>
                        <div class="form-group mb-3">
                            <label>Deskripsi</label>
                            <textarea name="card1_text" rows="3" class="form-control"
                                      placeholder="Deskripsi card 1..."></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label>Gambar</label>
                            <input type="file" name="card1_image" class="form-control">
                            <small class="text-muted">Gambar untuk card pertama.</small>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Simpan Card 1</button>
                    </form>
                </div>
            </div>
        </div>

        {{-- CARD 2 --}}
        <div class="col-xl-4 col-lg-6 mb-4">
            <div class="card shadow h-100">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Card 2</h6>
                </div>
                <div class="card-body">
                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label>Judul</label>
                            <input type="text" name="card2_title" class="form-control"
                                   placeholder="lorem ipsum">
                        </div>
                        <div class="form-group mb-3">
                            <label>Deskripsi</label>
                            <textarea name="card2_text" rows="3" class="form-control"
                                      placeholder="Deskripsi card 2..."></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label>Gambar</label>
                            <input type="file" name="card2_image" class="form-control">
                            <small class="text-muted">Gambar untuk card kedua.</small>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Simpan Card 2</button>
                    </form>
                </div>
            </div>
        </div>

        {{-- CARD 3 --}}
        <div class="col-xl-4 col-lg-6 mb-4">
            <div class="card shadow h-100">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Card 3</h6>
                </div>
                <div class="card-body">
                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label>Judul</label>
                            <input type="text" name="card3_title" class="form-control"
                                   placeholder="lorem ipsum">
                        </div>
                        <div class="form-group mb-3">
                            <label>Deskripsi</label>
                            <textarea name="card3_text" rows="3" class="form-control"
                                      placeholder="Deskripsi card 3..."></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label>Gambar</label>
                            <input type="file" name="card3_image" class="form-control">
                            <small class="text-muted">Gambar untuk card ketiga.</small>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Simpan Card 3</button>
                    </form>
                </div>
            </div>
        </div>

    </div> {{-- end .row --}}
</div> {{-- end .container-fluid --}}
@endsection
