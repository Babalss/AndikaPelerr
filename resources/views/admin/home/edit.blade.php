@extends('layouts.admin.master')

@section('title', 'Edit Home')

@section('content')
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Admin • Edit Home</h1>
        <a href="{{ route('home') }}" class="btn btn-sm btn-secondary" target="_blank">
            <i class="fas fa-external-link-alt mr-1"></i> Lihat Halaman
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <form action="{{ route('admin.home.update') }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- SECTION 1 --}}
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Section 1 - Hero & Carousel</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    {{-- Text --}}
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label>Judul (Hero Title)</label>
                            <input type="text" name="hero_title" class="form-control"
                                   value="{{ old('hero_title', $home->hero_title ?? 'LOREM IPSUM') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Deskripsi</label>
                            <textarea name="hero_text" rows="4" class="form-control">{{ old('hero_text', $home->hero_text ?? '') }}</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label>Teks Tombol</label>
                            <input type="text" name="hero_button" class="form-control"
                                   value="{{ old('hero_button', $home->hero_button ?? 'Secondary') }}">
                        </div>
                    </div>

                    {{-- Carousel --}}
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label>Gambar Carousel 1</label>
                            <input type="file" name="carousel_1" class="form-control">
                            @if(!empty($home->carousel_1))
                                <img src="{{ asset('storage/images/'.$home->carousel_1) }}" class="mt-2" style="width: 100%; max-height: 150px; object-fit: cover;">
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <label>Gambar Carousel 2</label>
                            <input type="file" name="carousel_2" class="form-control">
                            @if(!empty($home->carousel_2))
                                <img src="{{ asset('storage/images/'.$home->carousel_2) }}" class="mt-2" style="width: 100%; max-height: 150px; object-fit: cover;">
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <label>Gambar Carousel 3</label>
                            <input type="file" name="carousel_3" class="form-control">
                            @if(!empty($home->carousel_3))
                                <img src="{{ asset('storage/images/'.$home->carousel_3) }}" class="mt-2" style="width: 100%; max-height: 150px; object-fit: cover;">
                            @endif
                        </div>
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
                <div class="row">
                    {{-- Text --}}
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label>Judul Section 2</label>
                            <input type="text" name="section2_title" class="form-control"
                                   value="{{ old('section2_title', $home->section2_title ?? 'LOREM IPSUM') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Deskripsi Section 2</label>
                            <textarea name="section2_text" rows="4" class="form-control">{{ old('section2_text', $home->section2_text ?? '') }}</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label>Teks Tombol Section 2</label>
                            <input type="text" name="section2_button" class="form-control"
                                   value="{{ old('section2_button', $home->section2_button ?? 'Secondary') }}">
                        </div>
                    </div>

                    {{-- Image --}}
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label>Gambar Section 2</label>
                            <input type="file" name="section2_image" class="form-control">
                            @if(!empty($home->section2_image))
                                <img src="{{ asset('storage/images/'.$home->section2_image) }}" class="mt-2" style="width: 100%; max-height: 200px; object-fit: cover;">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary mb-5">Simpan Semua Perubahan</button>
    </form>

    {{-- FORM HAPUS --}}
    @if(!empty($home))
        <form action="{{ route('admin.home.delete') }}" method="POST" class="mb-5"
              onsubmit="return confirm('Yakin mau menghapus semua konten Home?');">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger">
                Hapus Semua Konten Home
            </button>
        </form>
    @endif
</div>
@endsection
