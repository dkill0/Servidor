@extends('layouts.main')
@section('contenido')
@if(!$idPedido->isEmpty())
<h2>Pendientes</h2>

@if(!$pedidosPend->isEmpty())

@php


$cantidad=count($pedidosPend);
$linea=0;
$total2= 0;
$totalSinDesc2=0;

@endphp


@foreach ($pedidosPend as $pedido)
@php
$precio = $pedido-> precio;
$descuento = $pedido-> descuento;
$cantidad2 = $pedido-> cantidad;
$total= $cantidad2*($precio-($precio*($descuento/100)));
$totalSinDesc=$cantidad2*$precio;


if ($linea==0){
echo '
<h5>Número de pedido: '.$pedido->idPedido.'</h5>
<table class="table table-sm table-primary">
    <tr>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Cantidad</th>
        <th>Descuento</th>
        <th class="text-end">Precio unidad</th>
        <th class="text-end">Precio final</th>



    </tr>';
    }

    @endphp

    <tr>

        <td>{{$pedido->marca}} </td>
        <td>{{$pedido->modelo}}</td>
        <td>{{$pedido->cantidad}}</td>
        @php
        if($pedido->descuento==0){
        echo' <td></td>';
        }else{

        echo'<td>'.$pedido->descuento.'% </td>';
        }

        @endphp
        <td class="text-end">{{$pedido->precio}}€</td>
        <td class="text-end">{{$total}}€</td>


    </tr>

    @php

    $linea++;

    $total2= $total + $total2;
    $totalSinDesc2= $totalSinDesc + $totalSinDesc2;
    if ($linea==$cantidad){


    echo '
    <tr>
        <th>Total sin descuento</th>
        <th class="text-end" colspan="4">'.$totalSinDesc2.'€</th>
        <th></th>
    </tr>
    <tr>
        <th>Total a pagar</th>
        <th class="text-end" colspan="5">'.$total2.'€</th>
    </tr>
</table>';

}

@endphp

@endforeach
<a href="{{ route('productos.carrito')}}" class="btn btn-danger">Pagar</a>
@else
<p> No tienes ningun pedido pendiente.</p>
<a href="{{ route('productos.portatiles')}}" class="btn btn-primary">Nuevo pedido</a>

@endif
<hr>
<h2>Finalizados</h2>
@php
$linea3=0;
$cantidadPedidos=count($pedidosFin);
@endphp

@foreach ($pedidosFin as $pedidos)
@php
$linea3++;
@endphp
@if($linea3<=$cantidadPedidos)
    <a href="{{ route('productos.verPedido', $pedidos->idPedido )}}" class="mt-4 me-4 btn btn-primary">Pedido número: {{$pedidos->idPedido}}</a>
    
    @endif
    @endforeach

    @else
    <p> Todavía no has realizado ningun pedido. ¿A qué esperas?</p>
    <a href="{{ route('productos.portatiles')}}" class="btn btn-primary">Nuevo pedido</a>
    @endif
    @endsection