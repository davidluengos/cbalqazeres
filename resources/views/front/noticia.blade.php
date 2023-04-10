@extends('front.main')

@section('content')


<div class="container-xxl py-5" id="plantilla">
    <div class="container">

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 ">
                    <div class="col-lg-4 col-md-5 wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="d-flex justify-content-end">
                            @if ($noticia->imagen)
                                <img class="img-fluid rounded" data-wow-delay="0.1s" src="{{$noticia->imagen}}">
                            @else
                                <img class="img-fluid rounded" data-wow-delay="0.1s" src="/img/logo_alqazeres.jpg">
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7 wow fadeInRight" data-wow-delay="0.3s">
                        <div class="border-start ps-4">
                            <p class="fs-5 fw-bold text-primary">{{date('d.m.Y', strtotime($noticia->fecha))}}</p>
                            <h1 class="display-5 mb-4">{{$noticia->titulo}}</h1>
                            <p class="mb-4">{!! $noticia->contenido !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


    </div>
</div>

@endsection