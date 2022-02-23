@extends('layouts.main')
@section('contenido')
@if   (!$idPedido->isEmpty())
<h2>Pedido en marcha</h2>
@foreach ($idPedido as $id)
<h4>Número de pedido: {{$id->idPedido}}</h4>
@endforeach
<table class="table table-sm">
    <tr>
        <td>Marca</td>
        <td>Modelo</td>
        <td>Cantidad</td>

        <td>Precio</td>
    </tr>
    @foreach ($pedido as $pedido)  
    <tr>

        <td>{{$pedido->marca}} </td>
        <td>{{$pedido->modelo}}</td>
        <td>{{$pedido->cantidad}}</td>
        <td>{{$pedido->precio}}€</td>
    </tr>
    @endforeach

    <tr>
        @foreach($total as $total)
        <td colspan="3">Total: </td>
        <td>{{$total->total}}€</td>
        @endforeach
    </tr>
</table>

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