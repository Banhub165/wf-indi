@extends('layout')

@section('title', 'Our Products')

@section('content')
<h1>Produk Kami</h1>
<p>Pilih kategori bucket hadiah sesuai kebutuhanmu:</p>

<div class="row text-center mt-4">
    <div class="col-md-4">
        <div class="card shadow-sm">
            <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93" class="card-img-top" alt="Flower Bucket">
            <div class="card-body">
                <h5>Flower Bouquet</h5>
                <p>Bucket bunga segar untuk momen spesial.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm">
            <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df" class="card-img-top" alt="Gift Bucket">
            <div class="card-body">
                <h5>Gift Bucket</h5>
                <p>Isi bucket custom seperti coklat, boneka, dan hadiah kecil.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm">
            <img src="https://images.unsplash.com/photo-1519682337058-a94d519337bc" class="card-img-top" alt="Graduation Bucket">
            <div class="card-body">
                <h5>Graduation Bouquet</h5>
                <p>Bucket bunga & boneka untuk wisuda dan pencapaian.</p>
            </div>
        </div>
    </div>
</div>

@isset($program)
    <div class="alert alert-info mt-4">
        <strong>Detail produk:</strong> {{ ucfirst($program) }}
    </div>
@endisset
@endsection
