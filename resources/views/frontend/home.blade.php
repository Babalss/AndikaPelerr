@extends('layouts.app')

@section('title', 'Home')

@section('content')
  <section id="hom1" style="padding: 100px 200px;">
    <section id="home" style="display: flex; align-items: center; margin-top: 50px; gap: 100px;">

      <div class="konten">
        <div class="lorem" style="width: 400px;">
          <h1>LOREM IPSUM</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dicta, aperiam
            temporibus ullam eligendi quibusdam rerum. Nemo quo necessitatibus sapiente a. Quo illum
            similique placeat fuga, illo a dicta excepturi.
          </p>
        </div>
        <button type="button" class="btn btn-secondary">Secondary</button>
      </div>

      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('images/bb.jpg') }}" class="d-block w-100" alt="..."
                 style="height: 600px; object-fit: cover;">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/normal.jpg') }}" class="d-block w-100" alt="..."
                 style="height: 600px; object-fit: cover;">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/pneumonia.jpg') }}" class="d-block w-100" alt="..."
                 style="height: 600px; object-fit: cover;">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    
</section>

<section id="home2" style="background: #0000; margin-right: 400px; display: flex; align-items: center; margin-top: 200px; margin-bottom: 100px; justify-content: center; gap: 100px;">

  <div class="gambar">
    <img src="{{ asset('images/normal.jpg') }}" alt="gambar1"
         style="width: 290px; height: 400px; object-fit: cover;">
  </div>

  <div class="konten4">
    <div class="lorem" style="width: 400px;">
      <h1>LOREM IPSUM</h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dicta, aperiam
        temporibus ullam eligendi quibusdam rerum. Nemo quo necessitatibus sapiente a. Quo illum
        similique placeat fuga, illo a dicta excepturi.
      </p>
    </div>
    <button type="button" class="btn btn-secondary">Secondary</button>
  </div>

</section>
@endsection
