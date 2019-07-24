@extends('perfil.layout')
@section('content')
<div class="map"></div>
    <div class="container-fluid">
        <div class="row justify-content-end">
        @include('perfil.partials.nav')
        <inmueble-detalle></inmueble-detalle>
    </div>
</div>
@stop

@push('styles')
    <link rel="stylesheet" href="/css/slick.css" />
@endpush

@push('scripts')
    <script src="/js/slick.min.js"></script>
    <script>
        $('.gallery').slick({
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: true,
            accessibility: false
        });
    </script>
@endpush
