@extends('layouts.app')

@section('title', 'Home')

@section('content')

@if(!$home)
    <div style="padding: 100px 0; text-align:center;">
        <h2>Belum ada konten Home.</h2>
        <p>Silakan isi dari halaman admin.</p>
    </div>
@else

    {{-- ======== KONTEN NORMAL ======== --}}
    <section id="hom1" style="padding: 100px 200px;">
        <section id="home" style="display: flex; align-items: center; margin-top: 50px; gap: 100px;">

            <div class="konten">
                <div class="lorem" style="width: 400px;">
                    <h1>{{ $home->hero_title }}</h1>
                    <p>{{ $home->hero_text }}</p>
                </div>
                @if($home->hero_button)
                    <button type="button" class="btn btn-secondary">
                        {{ $home->hero_button }}
                    </button>
                @endif
            </div>

            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @php
                        $c1 = $home->carousel_1;
                        $c2 = $home->carousel_2;
                        $c3 = $home->carousel_3;
                        $firstActive = false;
                    @endphp

                    @if($c1)
                        <div class="carousel-item active">
                            <img src="{{ asset('storage/images/'.$c1) }}" class="d-block w-100" alt="..."
                                 style="height: 600px; object-fit: cover;">
                        </div>
                        @php $firstActive = true; @endphp
                    @endif

                    @if($c2)
                        <div class="carousel-item {{ !$firstActive ? 'active' : '' }}">
                            <img src="{{ asset('storage/images/'.$c2) }}" class="d-block w-100" alt="..."
                                 style="height: 600px; object-fit: cover;">
                        </div>
                        @php $firstActive = true; @endphp
                    @endif

                    @if($c3)
                        <div class="carousel-item {{ !$firstActive ? 'active' : '' }}">
                            <img src="{{ asset('storage/images/'.$c3) }}" class="d-block w-100" alt="..."
                                 style="height: 600px; object-fit: cover;">
                        </div>
                    @endif
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
            @if($home->section2_image)
                <img src="{{ asset('storage/images/'.$home->section2_image) }}" alt="gambar1"
                     style="width: 290px; height: 400px; object-fit: cover;">
            @endif
        </div>

        <div class="konten4">
            <div class="lorem" style="width: 400px;">
                <h1>{{ $home->section2_title }}</h1>
                <p>{{ $home->section2_text }}</p>
            </div>
            @if($home->section2_button)
                <button type="button" class="btn btn-secondary">{{ $home->section2_button }}</button>
            @endif
        </div>
    </section>

@endif

@endsection
