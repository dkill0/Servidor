@extends('layouts.main')
@section('contenido')
<div class="container">
    <div class="row  text-center">
            <h1>Top descuentos semanales</h1>
    </div>
    <div class="row justify-content-around">

    @foreach($productos as $producto)
        <div class="col-5" style="border: 2px solid black;">
            {{$producto->idProducto}}
        </div>
    @endforeach
    </div>



</div>
@endsection