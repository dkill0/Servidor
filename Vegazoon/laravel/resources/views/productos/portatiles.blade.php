@extends('layouts.main')
@section('contenido')

<div class="container">
    <div class="row justify-content-left">
        @foreach($portatiles as $producto)

        <div class="card col-12 col-md-5 col-lg-3" style="">
            <a href="" class="btn">
                <img src="{{$producto->imagen}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$producto->marca}}</h5>
                    <h6>{{$producto->modelo}}</h6>
                    <p class="card-text">{{$producto->caracteristicas}}</p>
                    <p>{{$producto->precio}}€</p>
                    @if($producto->descuento!=0)
                    <p>Descuento: {{$producto->descuento}}%</p>
                    @endif
                </div>
                <div class="card-footer">
                    Añadir al carrito
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection