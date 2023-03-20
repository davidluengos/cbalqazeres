@extends('front.main')

@section('content')
    
<div class="container-xxl py-5" id="plantilla">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-bold text-primary">Foto de Familia</p>
            <h1 class="display-5 mb-5">Temporada 2022/23</h1>
        </div>
    </div>
</div>
    <!-- Carousel Start -->
<div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/cabecera.jpg" alt="Image">
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->

@endsection