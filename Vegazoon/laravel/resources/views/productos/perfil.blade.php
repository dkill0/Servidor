@extends('layouts.main')
@section('contenido')
<div>
@foreach($persona as $persona)
    {{$persona->name}}
    {{$persona->dni}}
    {{$persona->direccion}}
    {{$persona->tlf}}
    {{$persona->email}}

    @endforeach
</div>
@endsection