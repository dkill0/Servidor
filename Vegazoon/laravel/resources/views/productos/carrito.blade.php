@extends('layouts.main')
@section('contenido')
@if   (!$idPedido->isEmpty())
<h2>Pedido en marcha</h2>
@php


$cantidad=count($pedido);
$linea=0;
$total2= 0;
$totalSinDesc2=0;

@endphp

@foreach ($pedido as $pedido)
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

<p>
    <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Pago</a>
    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Datos de envío</button>
</p>
<div class="row">
    <div class="col">
        <div class="collapse multi-collapse" id="multiCollapseExample1">
            <div class="col-12  mb-3">
                <h1 class="text-center">Tarjeta de crédito o débito</h1>
                <hr>
            </div>

            <div class="col-12 mb-3">
                <input class="form-control" type="text" placeholder="Titular" required>
            </div>

            <div class="col-12  mb-3">
                <input class="form-control" type="text" placeholder="Nº de tarjeta" required>
            </div>



            <div class="col-4 mb-3">
                <small class="form-text">Mes de expiración:</small>
                <input class="form-control" type="number" pattern="[0-9]{2}" placeholder="MM" required>
            </div>

            <div class="col-4 mb-3">
                <small class="form-text">Año de expiración:</small>
                <input class="col-3 form-control" type="text" required placeholder="AA">

            </div>


            <div class="col-4 mb-3">
                <small class="form-text">CCV:</small>
                <input class="col-3 form-control" type="text" required placeholder="CCV">
            </div>

            <div class="col-12 mb-3">
                <label class="form-label" for="tipo">Tipo de tarjeta</label>
                <select class="form-select" name="tipo" id="tipo">
                    <option value="visa">Visa</option>
                    <option value="master">Mastercard</option>
                    <option value="america">American Express</option>
                </select>
            </div>



            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="opc" value="factura">
                <label class="form-check-label" for="opc">Necesito factura</label>
            </div>

            <div class="ms-auto form-check mb-3">
                <input type="checkbox" class="form-check-input" required id="terminos" value="factura" checked>
                <label class="form-check-label" for="terminos">He leído y acepto las condiciones de uso y compra</label>
            </div>
            <div class="d-grid col-5 float-start">
                @php 
                $idUser = auth()->user()->id;
                @endphp
                <a href="{{route('productos.pagos', $idUser)}}" class=" btn btn-warning">a</a>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="collapse multi-collapse" id="multiCollapseExample2">
            <div class="card card-body">
                @php
                $name=auth()->user()->name;
                $direccion=auth()->user()->direccion;
                $tlf=auth()->user()->tlf;

                @endphp
                <p>{{$name}}</p>
                <p>{{$direccion}}</p>
                <p>{{$tlf}}</p>
            </div>
        </div>
    </div>
</div>



@else
<div class="alert alert-danger">No tienes articulos en el carrito</div>

@endif

<br>




<h1></h1>
@endsection