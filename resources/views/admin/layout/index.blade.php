@extends('admin.layout.master')

@section('master.content')

<!-- Navbar -->
@include('admin.components.navbar')
<!-- End Navbar -->

<!-- Sidebar -->
@include('admin.components.sidebar')
<!-- End Sidebar -->

<!-- Content -->
@yield('content')
<!-- End Content -->

<!-- Footer -->
@include('admin.components.footer')
<!-- End Footer -->

@endsection()