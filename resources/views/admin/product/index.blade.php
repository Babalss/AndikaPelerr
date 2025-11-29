@extends('layouts.admin.master')

@section('title', 'Admin Product')

@section('content')
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Admin • Product</h1>
        <a href="{{ route('product') }}" class="btn btn-sm btn-secondary" target="_blank">
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

    <div class="mb-3">
        <a href="{{ route('admin.product.create') }}" class="btn btn-primary">
            Tambah Product
        </a>
    </div>

    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Product</h6>
        </div>
        <div class="card-body">
            @if($products->isEmpty())
                <p>Belum ada product.</p>
            @else
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Gambar</th>
                                <th width="180">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $index => $product)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $product->title }}</td>
                                    <td style="max-width: 300px;">
                                        {{ Str::limit($product->description, 80) }}
                                    </td>
                                    <td>
                                        @if($product->image)
                                            <img src="{{ asset('storage/products/'.$product->image) }}"
                                                 style="width:80px; height:60px; object-fit:cover;">
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-warning btn-sm">
                                            Edit
                                        </a>

                                        <form action="{{ route('admin.product.delete', $product->id) }}"
                                              method="POST" class="d-inline"
                                              onsubmit="return confirm('Yakin mau menghapus product ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
