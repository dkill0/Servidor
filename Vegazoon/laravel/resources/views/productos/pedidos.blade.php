@extends('layouts.main')
@section('contenido')

@if(!$pedidos->isEmpty())
@foreach ($pedidos as $pedidos)

@switch($pedidos)
    @case($pedidos->enviado == 0)
        <h3>Pedidos pendientes de confirmacion</h3>
        {{$pedidos->idPedido}}
    @break
    @case($pedidos->enviado == 1 && $pedidos->pagado==0 )
        <h3>Pedidos pendientes de pago</h3>
        {{$pedidos->idPedido}}
    @break
@endswitch

@endforeach

@if($pedidos->pagado == 1)
No tienes pedidos pedientes.
<a href="{{ route('productos.portatiles')}}" class="btn btn-primary">Nuevo pedido</a>
<h3>Pedidos finalizados</h3>
        {{$pedidos->idPedido}}
@endif
@else
No tienes pedidos pedientes.
<a href="{{ route('productos.portatiles')}}" class="btn btn-primary">Nuevo pedido</a>
@endif

@endsection