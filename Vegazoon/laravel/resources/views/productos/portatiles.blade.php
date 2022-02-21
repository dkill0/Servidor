@extends('layouts.main')
@section('contenido')

<h1 class="text-center mt-4">Nuestros portátiles</h1>

<form action="{{ route('productos.portatiles')}}" method="get">
    @method('get')
    @csrf
    <select name="filtro" id="filtro" class="">
        <option value="">Elige un filtro</option>
        <option value="1">Marca ↑</option>
        <option value="2">Marca ↓</option>
        <option value="3">Modelo ↑</option>
        <option value="4">Modelo ↓</option>
        <option value="5">Precio ↑</option>
        <option value="6">Precio ↓</option>

    </select>
    <button type="submit" class="btn btn-outline-primary ">Filtrar</button>
</form>
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3  row-cols-lg-4 g-4 justify-content-left">

    @foreach($portatiles as $producto)
    <div class="col mt-5">
        <div class="card" style="width: 18rem;">
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