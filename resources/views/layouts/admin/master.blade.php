<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title', 'Admin')</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900"
          rel="stylesheet">

    {{-- SESUAIKAN DENGAN LOKASI FILE DI PUBLIC --}}
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
</head>
<body id="page-top">

<div id="wrapper">
    {{-- SIDEBAR --}}
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center"
           href="{{ route('admin.dashboard') }}">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
        </a>

        <hr class="sidebar-divider mb-2">

        {{-- TAMPAILAN --}}
        <div class="sidebar-heading">Tampilan</div>
        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}"><span>Home</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('product') }}"><span>Product</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('aboutme') }}"><span>About Me</span></a></li>

        <hr class="sidebar-divider">

        {{-- ADMIN --}}
        <div class="sidebar-heading">Admin</div>
        <li class="nav-item"><a class="nav-link" href="{{ route('admin.home') }}"><span>Home</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('admin.product') }}"><span>Product</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('admin.aboutme') }}"><span>About Me</span></a></li>

        <hr class="sidebar-divider d-none d-md-block">

        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>
    {{-- END SIDEBAR --}}

    {{-- CONTENT WRAPPER --}}
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content" class="p-4">
            @yield('content')
        </div>

        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2020</span>
                </div>
            </div>
        </footer>
    </div>
</div>

<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
<script src="{{ asset('js/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('js/demo/datatables-demo.js') }}"></script>

@stack('scripts')
</body>
</html>
