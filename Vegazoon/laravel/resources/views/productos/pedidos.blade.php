@extends('layouts.main')
@section('contenido')
@if(!$idPedido->isEmpty())
<h2>Pendientes</h2>

@if(!$pedidosPend->isEmpty())

@foreach ($pedidosPend as $pedido)
hola


@endforeach
@else
<p> No tienes ningun pedido pendiente.</p>
<a href="{{ route('productos.portatiles')}}" class="btn btn-primary">Nuevo pedido</a>

@endif



<h2>Finalizados</h2>

@if(!$pedidosFin->isEmpty())

@php
    $repetido=-1;
@endphp


@foreach ($pedidosFin as $pedidos)

@php


    if ($repetido!=$pedidos->idPedido){
        echo '
        <h5>Número de pedido: '.$pedidos->idPedido.'</h5>
    <table class="table table-sm">
    <tr>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Cantidad</th>

        <th>Precio</th>
    </tr>';
    }
  
@endphp

    
    
    <tr>

        <td>{{$pedidos->marca}} </td>
        <td>{{$pedidos->modelo}}</td>
        <td>{{$pedidos->cantidad}}</td>
        <td>{{$pedidos->precio}}€</td>
    </tr>
    @php


    if ($repetido==$pedidos->idPedido){
        echo ' </table>';
    }

    $repetido=$pedidos->idPedido;

@endphp

   

@endforeach




@endif


@else
<p> Todavía no has realizado ningun pedido. ¿A qué esperas?</p>
<a href="{{ route('productos.portatiles')}}" class="btn btn-primary">Nuevo pedido</a>
@endif
@endsection