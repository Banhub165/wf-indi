@extends('layout')

@section('title', '404 Not Found')

@section('content')
<div class="text-center">
    <h1 class="display-3 text-danger">404</h1>
    <p>Halaman yang kamu cari tidak ditemukan.</p>
    <a href="{{ url('/') }}" class="btn btn-outline-danger">Kembali ke Beranda</a>
</div>
@endsection
