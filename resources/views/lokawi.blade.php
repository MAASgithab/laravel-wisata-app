@extends('template.layout')

@section('content')
   <div class="container mt-5">
       <h1 class="text-center mb-4">Destinasi Wisata LOKAWI</h1>
       <p class="text-center mb-4">Temukan berbagai destinasi wisata menarik di seluruh Indonesia yang siap untuk kamu jelajahi!</p>
   </div>
<div class="container mb-5">
    <h1 class="text-center mb-4">Tempat Landmark Populer</h1>
    <div class="d-flex overflow-auto">
        <div class="card me-3" style="min-width: 250px; max-width: 250px;">
            <img src="{{ asset('images/kuta.jpg') }}" class="card-img-top" alt="Pantai Kuta" style="height: 150px; object-fit: cover;">
            <div class="card-body">
            <h5 class="card-title">Pantai Kuta</h5>
            <p class="card-text text-muted">Bali</p>
            <p class="card-text fw-bold text-primary">Rp 50.000</p>
            <div class="mb-2">
                <span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#189;</span>
                <span class="text-muted">(4.5)</span>
            </div>
            </div>
        </div>
        <div class="card me-3" style="min-width: 250px; max-width: 250px;">
            <img src="{{ asset('images/borobudur.jpg') }}" class="card-img-top" alt="Candi Borobudur" style="height: 150px; object-fit: cover;">
            <div class="card-body">
            <h5 class="card-title">Candi Borobudur</h5>
            <p class="card-text text-muted">Magelang</p>
            <p class="card-text fw-bold text-primary">Rp 75.000</p>
            <div class="mb-2">
                <span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                <span class="text-muted">(5.0)</span>
            </div>
            </div>
        </div>
        <div class="card me-3" style="min-width: 250px; max-width: 250px;">
            <img src="{{ asset('images/monas.jpg') }}" class="card-img-top" alt="Monas" style="height: 150px; object-fit: cover;">
            <div class="card-body">
            <h5 class="card-title">Monas</h5>
            <p class="card-text text-muted">Jakarta</p>
            <p class="card-text fw-bold text-primary">Rp 75.000</p>
            <div class="mb-2">
                <span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                <span class="text-muted">(5.0)</span>
            </div>
            </div>
        </div>
        <div class="card me-3" style="min-width: 250px; max-width: 250px;">
            <img src="{{ asset('images/bromo.jpg') }}" class="card-img-top" alt="Gunung Bromo" style="height: 150px; object-fit: cover;">
            <div class="card-body">
            <h5 class="card-title">Gunung Bromo</h5>
            <p class="card-text text-muted">Jawa Timur</p>
            <p class="card-text fw-bold text-primary">Rp 100.000</p>
            <div class="mb-2">
                <span class="text-warning">&#9733;&#9733;&#9733;&#9733;</span>
                <span class="text-muted">&#9734;</span>
                <span class="text-muted">(4.0)</span>
            </div>
            </div>
        </div>
        <div class="card me-3" style="min-width: 250px; max-width: 250px;">
            <img src="{{ asset('images/toba.jpg') }}" class="card-img-top" alt="Danau Toba" style="height: 150px; object-fit: cover;">
            <div class="card-body">
            <h5 class="card-title">Danau Toba</h5>
            <p class="card-text text-muted">Sumatera Utara</p>
            <p class="card-text fw-bold text-primary">Rp 30.000</p>
            <div class="mb-2">
                <span class="text-warning">&#9733;&#9733;&#9733;&#189;&#9734;</span>
                <span class="text-muted">(3.5)</span>
            </div>
            </div>
        </div>
        <div class="card me-3" style="min-width: 250px; max-width: 250px;">
            <img src="{{ asset('images/ampat.jpg') }}" class="card-img-top" alt="Raja Ampat" style="height: 150px; object-fit: cover;">
            <div class="card-body">
            <h5 class="card-title">Raja Ampat</h5>
            <p class="card-text text-muted">Papua Barat</p>
            <p class="card-text fw-bold text-primary">Rp 250.000</p>
            <div class="mb-2">
                <span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                <span class="text-muted">(5.0)</span>
            </div>
            </div>
        </div>
        <div class="card me-3" style="min-width: 250px; max-width: 250px;">
            <img src="{{ asset('images/tmii.jpg') }}" class="card-img-top" alt="Taman Mini Indonesia Indah" style="height: 150px; object-fit: cover;">
            <div class="card-body">
            <h5 class="card-title">Taman Mini Indonesia Indah</h5>
            <p class="card-text text-muted">Jakarta</p>
            <p class="card-text fw-bold text-primary">Rp 35.000</p>
            <div class="mb-2">
                <span class="text-warning">&#9733;&#9733;&#9733;&#9733;</span>
                <span class="text-muted">&#9734;</span>
                <span class="text-muted">(4.0)</span>
            </div>
            </div>
        </div>
    </div>
</div>
<div class="container mb-5">
    <h2 class="text-center mb-4">Hidden Gem Pilihan LOKAWI</h2>
    <div class="d-flex overflow-auto">
        <div class="card me-3" style="min-width: 250px; max-width: 250px;">
            <img src="{{ asset('images/derawan.jpg') }}" class="card-img-top" alt="Kepulauan Derawan" style="height: 150px; object-fit: cover;">
            <div class="card-body">
                <h5 class="card-title">Kepulauan Derawan</h5>
                <p class="card-text text-muted">Kalimantan Timur</p>
                <p class="card-text fw-bold text-primary">Rp 120.000</p>
                <div class="mb-2">
                    <span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#189;</span>
                    <span class="text-muted">(4.5)</span>
                </div>
            </div>
        </div>
        <div class="card me-3" style="min-width: 250px; max-width: 250px;">
            <img src="{{ asset('images/waerebo.jpg') }}" class="card-img-top" alt="Desa Wae Rebo" style="height: 150px; object-fit: cover;">
            <div class="card-body">
                <h5 class="card-title">Desa Wae Rebo</h5>
                <p class="card-text text-muted">Nusa Tenggara Timur</p>
                <p class="card-text fw-bold text-primary">Rp 80.000</p>
                <div class="mb-2">
                    <span class="text-warning">&#9733;&#9733;&#9733;&#9733;</span>
                    <span class="text-muted">&#9734;</span>
                    <span class="text-muted">(4.0)</span>
                </div>
            </div>
        </div>
        <div class="card me-3" style="min-width: 250px; max-width: 250px;">
            <img src="{{ asset('images/harau.jpeg') }}" class="card-img-top" alt="Lembah Harau" style="height: 150px; object-fit: cover;">
            <div class="card-body">
                <h5 class="card-title">Lembah Harau</h5>
                <p class="card-text text-muted">Sumatera Barat</p>
                <p class="card-text fw-bold text-primary">Rp 25.000</p>
                <div class="mb-2">
                    <span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#189;</span>
                    <span class="text-muted">(4.5)</span>
                </div>
            </div>
        </div>
        <div class="card me-3" style="min-width: 250px; max-width: 250px;">
            <img src="{{ asset('images/sempu.jpg') }}" class="card-img-top" alt="Pulau Sempu" style="height: 150px; object-fit: cover;">
            <div class="card-body">
                <h5 class="card-title">Pulau Sempu</h5>
                <p class="card-text text-muted">Jawa Timur</p>
                <p class="card-text fw-bold text-primary">Rp 20.000</p>
                <div class="mb-2">
                    <span class="text-warning">&#9733;&#9733;&#9733;&#9733;</span>
                    <span class="text-muted">&#9734;</span>
                    <span class="text-muted">(4.0)</span>
                </div>
            </div>
        </div>
        <div class="card me-3" style="min-width: 250px; max-width: 250px;">
            <img src="{{ asset('images/jumog.jpg') }}" class="card-img-top" alt="Air Terjun Jumog" style="height: 150px; object-fit: cover;">
            <div class="card-body">
                <h5 class="card-title">Air Terjun Jumog</h5>
                <p class="card-text text-muted">Karanganyar, Jawa Tengah</p>
                <p class="card-text fw-bold text-primary">Rp 15.000</p>
                <div class="mb-2">
                    <span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#189;</span>
                    <span class="text-muted">(4.5)</span>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
