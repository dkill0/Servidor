@extends('layouts.main')
@section('contenido')

<div class="row  text-center">
    <h1>Top descuentos semanales</h1>
</div>
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3  row-cols-lg-4 g-4 justify-content-left">

    @foreach($productos as $producto)
    <div class="col">
        <div class="card">
            <a href="{{ route('productos.producto', $producto->idProducto )}}" class="btn">
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
    </div>
    @endforeach
</div>
@endsection