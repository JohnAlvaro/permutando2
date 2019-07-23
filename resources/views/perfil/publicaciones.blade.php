@extends('perfil.layout')
@section('content')
<div class="map"></div>
<div class="container-fluid">
    <div class="row justify-content-end">
        @include('perfil.partials.nav')
        <publicaciones></publicaciones>  
    </div>
</div>
@stop