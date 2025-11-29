@extends('layouts.admin.master')

@section('title', 'Edit About Me')

@section('content')
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Admin • Edit About Me</h1>
        <a href="{{ route('aboutme') }}" class="btn btn-sm btn-secondary" target="_blank">
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

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Profil</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.aboutme.update') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control"
                                   value="{{ old('name', $about->name ?? '') }}">
                        </div>

                        <div class="form-group mb-3">
                            <label>NBI / NIM</label>
                            <input type="text" name="nbi" class="form-control"
                                   value="{{ old('nbi', $about->nbi ?? '') }}">
                        </div>

                        <div class="form-group mb-3">
                            <label>Deskripsi</label>
                            <textarea name="description" rows="4" class="form-control">{{ old('description', $about->description ?? '') }}</textarea>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label>Foto Profil</label>
                            <input type="file" name="photo" class="form-control">
                            <small class="text-muted d-block mb-2">
                                Gambar bulat 150x150 seperti di tampilan.
                            </small>

                            @if(!empty($about->photo))
                                <div style="width:120px; height:120px; border-radius:50%; overflow:hidden;">
                                    <img src="{{ asset('storage/images/'.$about->photo) }}"
                                         alt="preview"
                                         style="width:100%; height:100%; object-fit:cover;">
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Simpan Profil</button>
            </form>

       {{-- FORM HAPUS TERPISAH --}}
@if(!empty($about))
    <form action="{{ route('admin.aboutme.delete') }}" method="POST" class="mt-3"
          onsubmit="return confirm('Yakin mau menghapus profil?');">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">
            Hapus Profil
        </button>
    </form>
@endif

        </div>
    </div>
</div>
@endsection
