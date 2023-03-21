@extends('front.main')

@section('content')


<!-- 404 Start -->
<div class="container-xxl py-5" id="plantilla">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-bold text-primary">Clasificación LF Challenge</p>
        </div>
    </div>
</div>
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <iframe src="https://www.feb.es/Pasarela/Controles/clasificacion.aspx?g=67" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
</div>
</div>
<!-- 404 End -->

@endsection