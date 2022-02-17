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
    <div class="container">
        <header>
            <h1 class="text-center">Vegazoon</h1>

        </header>
        <div class="row justify-content-around">
            <div class="col">
                <a class="btn btn-primary" href="{{ route('productos.index')}}">Inicio</a>
            </div>

            <div class="col">

                <a href="#"> Bienvenido {{auth()->user()->name}}</a>
            </div>
            <div class="col">
                <a href="javascript: document.getElementById('logout').submit()" class="btn btn-danger btn-sm float-end">Salir</a>
                <form id="logout" action="{{route('logout')}}" method="POST" style="display:none">
                    @csrf
                </form>

            </div>


        </div>

        <div class="row justify-content-center">
            <a href="{{ route('productos.portatiles')}}" class=" col-5 btn">
                <div class="card">
                    <img src="./imagen/libro.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title text-center">Portatiles</h5>
                    </div>
                </div>
            </a>
        </div>
        @yield('contenido')
    </div>

</body>

</html>