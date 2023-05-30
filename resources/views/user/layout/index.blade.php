@extends('user.layout.master')

@section('master.content')

<!-- Navbar -->
@include('user.components.navbar')
<!-- End Navbar -->

<!-- Content -->
@yield('content')
<!-- End Content -->

<!-- Footer -->
@include('user.components.footer')
<!-- End Footer -->

@endsection()