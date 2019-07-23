@extends('perfil.layout')
@section('content')
<div class="map"></div>
    <div class="container-fluid">
        <div class="row justify-content-end">
        @include('perfil.partials.nav')
        <publicar></publicar> 
    </div>
</div>
@stop

@push('styles')

@endpush