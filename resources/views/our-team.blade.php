@extends('layout')

@section('title', 'Our Team')

@section('content')
<h1>Tim AbytaFlorist</h1>
<p class="mb-4">Kami adalah tim kecil dengan semangat besar dalam menghadirkan keindahan lewat karya.</p>

<div class="row text-center">
    <div class="col-md-4">
        <img src="https://via.placeholder.com/120" class="rounded-circle mb-2" width="120">
        <h5>Syaban Lahay</h5>
        <p>Sales and Marketing</p>
    </div>
    <div class="col-md-4">
        <img src="https://via.placeholder.com/120" class="rounded-circle mb-2" width="120">
        <h5>Said Abbas</h5>
        <p>Data Analyst</p>
    </div>
    <div class="col-md-4">
        <img src="https://via.placeholder.com/120" class="rounded-circle mb-2" width="120">
        <h5>Muhammad Syafir</h5>
        <p>Creative and Design</p>
    </div>
</div>

@isset($member)
    <div class="alert alert-info mt-4">
        Profil anggota: <strong>{{ $member }}</strong>
    </div>
@endisset
@endsection
