@extends('layouts.app')

@section('title', 'Product')

@section('content')
<section id="card" class="card pt-4">
  <div class="container">
    <h1 class="tittle1-about col-12 text-center" style="color: #0000;">Portfolio</h1>

    @if($products->isEmpty())
        <div class="text-center py-5">
            <p>Belum ada produk.</p>
        </div>
    @else
        <div class="row pt-5">
          @foreach($products as $product)
            <div class="col-lg-4 col-md-6 mt-5">
              <div class="card">
                @if($product->image)
                  <img src="{{ asset('storage/products/'.$product->image) }}" class="card-img-top" alt="{{ $product->title }}">
                @endif
                <div class="card-body">
                  <h5 class="card-title">{{ $product->title }}</h5>
                  <p class="card-text">
                    {{ $product->description }}
                  </p>
                </div>
              </div>
            </div>
          @endforeach
        </div>
    @endif
  </div>
</section>
@endsection
