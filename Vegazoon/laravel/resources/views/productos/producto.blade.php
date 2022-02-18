@extends('layouts.main')
@section('contenido')
<div>
@foreach($producto as $producto)
    {{$producto->marca}}
    {{$producto->modelo}}
    {{$producto->caracteristicas}}
    {{$producto->precio}}
    {{$producto->descuento}}

    @endforeach
</div>
@endsection