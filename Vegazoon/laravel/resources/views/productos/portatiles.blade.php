@extends('layouts.main')
@section('contenido')

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3  row-cols-lg-4 g-4 justify-content-left">
        @foreach($portatiles as $producto)
        <div class="col mt-5">
            <div class="card" style="">
                <a href="{{ route('productos.producto', $producto->idProducto )}}" class="btn">
                    <img src="{{ asset('img/'.$producto->imagen) }}" class="card-img-top" alt="...">
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
                      <button class="btn btn-primary"> Mas informacion</button> 
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>


@endsection