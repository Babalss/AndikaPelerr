@extends('layouts.admin.master')

@section('title', 'Edit Product')

@section('content')
<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Edit Product</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('admin.product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label>Judul</label>
                    <input type="text" name="title" class="form-control"
                           value="{{ old('title', $product->title) }}" required>
                </div>

                <div class="form-group mb-3">
                    <label>Deskripsi</label>
                    <textarea name="description" rows="4" class="form-control">{{ old('description', $product->description) }}</textarea>
                </div>

                <div class="form-group mb-3">
                    <label>Gambar</label>
                    <input type="file" name="image" class="form-control">
                    @if($product->image)
                        <img src="{{ asset('storage/products/'.$product->image) }}"
                             class="mt-2" style="width:150px; height:120px; object-fit:cover;">
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('admin.product') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
