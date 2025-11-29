<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Document')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="resources/css/app.css" rel="stylesheet">

</head>

<body style="font-family: Arial, Helvetica, sans-serif;  
    bg-secondary-subtle;">

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                    href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('product') ? 'active' : '' }}"
                    href="{{ route('product') }}">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('aboutme') ? 'active' : '' }}"
                    href="{{ route('aboutme') }}">About me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"
                    href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')


{{-- FOOTER --}}
<div class="footer"
    style="
        background: #eaeaea;
        padding: 20px 0;
        display: flex;
        justify-content: center;
        gap: 50px;
        border-top: 1px solid #c5c5c5;
        margin-top: 50px;
    ">


    <a href="#" style="text-decoration: none; color: black; display: flex; align-items: center; gap: 10px;">
        <img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" 
            style="width: 30px; height: 30px;">
        <span style="font-size: 16px; font-weight: bold;">Github</span>
    </a> 

    <a href="#" style="text-decoration: none; color: black; display: flex; align-items: center; gap: 10px;">
        <img src="https://cdn-icons-png.flaticon.com/512/174/174855.png" 
            style="width: 30px; height: 30px;">
        <span  style="font-size: 16px; font-weight: bold;" >Instagram</span>
    </a>

    <a href="#" style="text-decoration: none; color: black; display: flex; align-items: center; gap: 10px;">
        <img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" 
            style="width: 30px; height: 30px;">
        <span style="font-size: 16px; font-weight: bold;">LinkedIn</span>
    </a>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
