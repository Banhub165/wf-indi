@extends('layout')

@section('title', 'Home')

@section('content')
<div class="text-center">
    <img src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6" 
         alt="AbytaFlorist" class="img-fluid rounded shadow mb-4" style="max-height: 400px;">
    <h1 class="fw-bold text-pink">Welcome to AbytaFlorist 🌸</h1>
    <p class="lead mt-3">
        Temukan koleksi bucket hadiah terbaik untuk momen spesialmu — 
        mulai dari bucket bunga, coklat, hingga custom gift untuk orang tersayang.
    </p>
    <a href="{{ url('/program') }}" class="btn btn-pink text-white mt-3" 
       style="background-color: #e75480;">Lihat Produk Kami</a>
</div>
@endsection
