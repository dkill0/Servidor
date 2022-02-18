@extends('layouts.main')
@section('contenido')

@foreach ($pedido as $pedido)
@empty($pedido->idPedido)
Elige algun producto para comenzar tu pedido
@endempty

tu pedido es {{$pedido->idPedido}}
@endforeach
@endsection