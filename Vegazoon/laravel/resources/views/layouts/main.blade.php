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
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">


            <div class="container-fluid justify-content-between">


                
                <a class="navbar-brand" href="{{ route('productos.index')}}">
                    <img src="img/logoVM.jpg" alt="" style="width:40px">
                </a>
                <a class="nav-link" href="">Carrito</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_plegable2">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar_plegable2">
                    <ul class="navbar-nav me-auto">
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