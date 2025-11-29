@extends('layouts.admin.master')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">

    {{-- TITLE --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <h1 class="h3 mb-0 text-gray-800">WELCOME TO DASHBOARD</h1>
            <p class="text-muted mt-1">Created by NBI: <strong>1462300096</strong></p>
        </div>
    </div>

    {{-- STATISTICS CARDS --}}
    <div class="row">

        {{-- CARD HOME --}}
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Home Section
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Editable</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-home fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- CARD PRODUCT --}}
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Product Section
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Editable</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-box fa-2x text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- CARD ABOUT ME --}}
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                About Me Section
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Editable</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-info"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> {{-- END ROW 1 --}}

    {{-- SECOND ROW: BIG CARD --}}
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">

                {{-- HEADER --}}
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Welcome Message</h6>
                </div>

                {{-- BODY --}}
                <div class="card-body">
                    <p style="font-size: 16px;">
                        Selamat datang di halaman dashboard admin.  
                        Di sini kamu bisa mengelola konten website seperti:
                        <br><br>
                        Edit Home
                        <br><br>  
                        Edit Product
                        <br><br>  
                        Edit About Me  
                        <br><br>
                        Gunakan menu di sidebar untuk navigasi.
                    </p>
                </div>

            </div>
        </div>
    </div>

</div> {{-- END container-fluid --}}
@endsection
