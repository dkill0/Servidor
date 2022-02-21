@extends('layouts.main')
@section('contenido')

<div class="container"> <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Editar Perfil

                    @if(session('info'))
                    <div class="alert alert-success">
                        {{session('info')}}
                    </div>
                    @endif
                </div>
                <div class="card-body">
                   @foreach($persona as $persona)
                    <form action="{{ route('productos.modificaPerfil', $persona->id) }}" method="POST">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input type="text" name="name" value="{{$persona->name}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">DNI</label>
                            <input type="text" name="dni" value="{{$persona->dni}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Direccion</label>
                            <input type="text" name="direccion" value="{{$persona->direccion}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Teléfono</label>
                            <input type="number" name="tlf" value="{{$persona->tlf}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" value="{{$persona->email}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <br>
                            <button type="submit" class="btn btn-primary">Editar</button>
                        </div>
                    </form>
                    @endforeach

                </div>

            </div>

        </div>

    </div>
</div>

@endsection