@extends('layouts.app')

@section('title', 'Product')

@section('content')
<section id="card" class="card pt-4">
  <div class="container">
    <h1 class="tittle1-about col-12 text-center" style="color: #0000;">Portfolio</h1>

    <div class="row pt-5">
      <div class="col-lg-4 col-md-6 mt-5">
        <div class="card">
          <img src="{{ asset('images/bb.jpg') }}" class="card-img-top" alt="UI UX">
          <div class="card-body">
            <h5 class="card-title">lorem ipsum</h5>
            <p class="card-text">
              Some quick example text to build on the card title and make up the bulk of the card's content.
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mt-5">
        <div class="card">
          <img src="{{ asset('images/pneumonia.jpg') }}" class="card-img-top" alt="Front End">
          <div class="card-body">
            <h5 class="card-title">lorem ipsum</h5>
            <p class="card-text">
              Some quick example text to build on the card title and make up the bulk of the card's content.
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mt-5">
        <div class="card">
          <img src="{{ asset('images/normal.jpg') }}" class="card-img-top" alt="Back End">
          <div class="card-body">
            <h5 class="card-title">lorem ipsum</h5>
            <p class="card-text">
              Some quick example text to build on the card title and make up the bulk of the card's content.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
