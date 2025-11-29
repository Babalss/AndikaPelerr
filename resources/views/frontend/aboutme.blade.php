@extends('layouts.app')

@section('title', 'About Me')

@section('content')
<div style="display:flex; justify-content:center; margin-top:80px; padding-bottom: 130px;">

    {{-- JIKA TIDAK ADA DATA --}}
    @if (!$about)
        <div style="text-align:center; font-size:20px; color:gray; margin-top:80px;">
            <p>Belum ada konten.</p>
        </div>
    @else

    {{-- JIKA ADA DATA --}}
    <div style="width:600px; min-height:350px; display:flex; flex-direction:column;
                align-items:center; justify-content:center;">

        {{-- FOTO --}}
        @if($about->photo)
            <div style="width:150px; height:150px; border-radius:50%; overflow:hidden;
                        background:#0000; display:flex; align-items:center;
                        justify-content:center; margin-bottom:20px;">
                <img src="{{ asset('storage/images/'.$about->photo) }}"
                     alt="foto-profil"
                     style="width:100%; height:100%; object-fit:cover;">
            </div>
        @endif

        {{-- DATA --}}
        <div style="text-align:center;">
            @if($about->name)
                <h2 style="font-size:18px; margin-bottom:10px;">
                    {{ $about->name }}
                </h2>
            @endif

            @if($about->nbi)
                <p style="margin:10px 0;">
                    {{ $about->nbi }}
                </p>
            @endif

            @if($about->description)
                <p style="margin:10px 0;">
                    {!! nl2br(e($about->description)) !!}
                </p>
            @endif
        </div>

    </div>
    @endif

</div>
@endsection
