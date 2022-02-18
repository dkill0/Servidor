@extends('layouts.main')
@section('contenido')

<div class="row  text-center">
    <h1>Top descuentos semanales</h1>
</div>
<div class="row justify-content-left">

    @foreach($productos as $producto)

    <div class="card col-12 col-md-5">
        <a href="{{ route('productos.producto', $producto->idProducto )}}">
            <img src="{{ asset('img/'.$producto->imagen) }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$producto->marca}}</h5>
                <h6>{{$producto->modelo}}</h6>
                <p class="card-text">{{$producto->caracteristicas}}</p>
                <p>{{$producto->precio}}€</p>
                <p>{{$producto->descuento}}%</p>
            </div>
        </a>
    </div>
    @endforeach
</div>
@endsection