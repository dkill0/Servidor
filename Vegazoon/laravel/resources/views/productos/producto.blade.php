@extends('layouts.main')
@section('contenido')
<div class="row justify-content-center">
  @foreach($producto as $producto)
  <div class="col-8 text-center">
    <h1 class="text-center  position-relative">{{$producto->marca}}</h1>
    @if($producto->descuento!=0)
    <p>Descuento: {{$producto->descuento}}%</p>
    @endif

    <img src="{{ asset('img/'.$producto->imagen) }}" class="img-responsive mx-auto d-block" alt="">
    <h2>{{$producto->modelo}}</h2>
    <h5>{{$producto->caracteristicas}}</h5>
    <h3>{{$producto->precio}}€</h3>

  </div>
  @php
  $user_id=auth()->user()->id;
  @endphp

  <div class="col-12 col-lg-4 mt-5  align-self-center">
    <form action="{{route('productos.nuevoArticulo', [$user_id, 'idProd'=> $producto->idProducto])}}" method="post">

      @csrf
      <h4 class="text-center mb-3">Añadir al carrito</h4>
      <div class="row justify-content-center">
        <div class="col-2">
          <a onclick="resta()" class="btn btn-primary">-</a>
        </div>
        <div class="col-5">
          <input type="text" class="text-center form-control" name="cantidad" id="cantidad" pattern="[1-9]{1}" placeholder="" value="1" >
        </div>
        <div class="col-2">
          <a onclick="suma()" class="btn btn-primary">+</a>
        </div>
      </div>
      <div class="row justify-content-center">

        <button type="submit" class="mt-5 col-4 btn btn-primary">Aceptar</button>
      </div>
    </form>
  </div>
</div>
@endforeach
@endsection

<script>
  function suma() {

    let numero = parseInt(document.getElementById("cantidad").value);
    numero++;
    if (numero >= 1 && numero <= 9) {

      document.getElementById("cantidad").value = numero;
    } else if (numero > 9) {
      alert("Son demasiados, solo pedir de 1 a 9 unidades.");
    }
  }

  function resta() {
    let numero = parseInt(document.getElementById("cantidad").value);
    numero--;
    console.log(numero);
    if (numero >= 1 && numero <= 9) {

      document.getElementById("cantidad").value = numero;
    } else if (numero < 1) {
      alert("Qué listo eres.");
    }
  }
</script>