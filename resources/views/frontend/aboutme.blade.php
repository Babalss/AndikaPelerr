@extends('layouts.app')

@section('title', 'About Me')

@section('content')
<div style="display:flex; justify-content:center; margin-top:80px; padding-bottom: 130px;">

    <div style="width:600px; height:350px; display:flex; flex-direction:column;
                align-items:center; justify-content:center;">

        <div style="width:150px; height:150px; border-radius:50%; overflow:hidden;
                    background:#0000; display:flex; align-items:center;
                    justify-content:center; margin-bottom:20px;">
            <img src="{{ asset('images/bb.jpg') }}" alt="foto-profil"
                style="width:100%; height:100%; object-fit:cover;">
        </div>

        <div style="text-align:center;">
            <h2 style="font-size:18px; margin-bottom:10px;">Muhammad Iqbal Alghozi</h2>
            <p style="margin:10px 0;">1462300096</p>
            <p style="margin:10px 0;">
                Hii Saya mahasiswa dari Universitas 17 Agustus 1945<br>Surabaya
            </p>
        </div>

    </div>
</div>
@endsection
