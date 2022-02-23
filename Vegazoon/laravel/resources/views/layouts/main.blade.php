<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vegazoon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid">
        <header>
            <h1 class="text-center">Vegazoon</h1>

        </header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container-fluid justify-content-between">
                <a class="navbar-brand" href="{{ route('productos.index')}}">
                    <img src="http://localhost/Servidor/Vegazoon/laravel/public/img/logoVM.png" alt="" style="width:40px">
                </a>
                <a class="btn btn-dark d-block d-md-none" href="{{route('productos.carrito')}}"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                    </svg></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_plegable2">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar_plegable2">
                    <ul class="navbar-nav me-auto text-center">
                        <li class="nav-item">
                            <a class="nav-link link-active" href="{{ route('productos.index')}}">Inicio</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('productos.portatiles')}}">Portatiles</a></li>
                        @php
                        $user_id=auth()->user()->id;
                        @endphp
                        <li class="nav-item"><a class="nav-link" href="{{ route('productos.compruebaPedido', $user_id)}}">Pedidos</a></li>



                    </ul>
                    <br>

                    <div class="d-flex justify-content-between">
                        @php
                        $user_id=auth()->user()->id;
                        @endphp

                        <a href="{{ route('productos.perfil', $user_id)}}" class="me-3 link-light"> Bienvenido {{auth()->user()->name}}</a>
                        <a class="btn btn-dark d-none d-md-block" href="{{route('productos.carrito')}}"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                    </svg></a>
                        <a href="javascript: document.getElementById('logout').submit()" class="btn btn-danger btn-sm float-end">Salir</a>
                        <form id="logout" action="{{route('logout')}}" method="POST" style="display:none">
                            @csrf
                        </form>
                    </div>




                </div>

            </div>
        </nav>



        @yield('contenido')
    </div>

</body>

</html>