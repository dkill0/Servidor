@extends('layouts.main')
@section('contenido')

@if(!$pedidos->isEmpty())
@foreach ($pedidos as $pedidos)

@if($pedidos->pagado =0)
<h1>Pedidos pendientes</h1>
@endif
@if($pedidos->pagado = 1)

<a href="{{ route('productos.portatiles')}}" class="btn btn-primary">Nuevo pedido</a>
<h3>Pedidos finalizados</h3>
@foreach ($pedidos as $pedidos)



@endforeach
@endif
@endforeach


@else
<p> Todavía no has realizado ningun pedido. ¿A qué esperas?</p>
<a href="{{ route('productos.portatiles')}}" class="btn btn-primary">Nuevo pedido</a>
@endif



@endsection