@extends('layouts.admin.master')

@section('title', 'Edit Home')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Admin • Edit Home</h1>

    <div class="row">
        {{-- SECTION 1: HERO --}}
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Section 1 - Hero</h6>
                </div>
                <div class="card-body">
                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label>Judul (LOREM IPSUM)</label>
                            <input type="text" name="hero_title" class="form-control"
                                   placeholder="LOREM IPSUM">
                        </div>

                        <div class="form-group mb-3">
                            <label>Deskripsi</label>
                            <textarea name="hero_text" rows="4" class="form-control"
                                      placeholder="Teks lorem ipsum bagian pertama..."></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label>Teks Tombol</label>
                            <input type="text" name="hero_button" class="form-control"
                                   placeholder="Secondary">
                        </div>

                        <button type="submit" class="btn btn-primary">
                            Simpan Section 1
                        </button>
                    </form>
                </div>
            </div>
        </div>

        {{-- SECTION 1: CAROUSEL --}}
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Carousel Gambar</h6>
                </div>
                <div class="card-body">
                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label>Gambar 1</label>
                            <input type="file" name="carousel_1" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label>Gambar 2</label>
                            <input type="file" name="carousel_2" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label>Gambar 3</label>
                            <input type="file" name="carousel_3" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">
                            Simpan Carousel
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- SECTION 2 --}}
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Section 2</h6>
        </div>
        <div class="card-body">
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label>Judul Section 2</label>
                            <input type="text" name="section2_title" class="form-control"
                                   placeholder="LOREM IPSUM">
                        </div>
                        <div class="form-group mb-3">
                            <label>Deskripsi Section 2</label>
                            <textarea name="section2_text" rows="4" class="form-control"
                                      placeholder="Teks lorem ipsum bagian kedua..."></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label>Teks Tombol Section 2</label>
                            <input type="text" name="section2_button" class="form-control"
                                   placeholder="Secondary">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label>Gambar Section 2</label>
                            <input type="file" name="section2_image" class="form-control">
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">
                    Simpan Section 2
                </button>
            </form>
        </div>
    </div>
@endsection
