<header class="columna row">
    <div class="col-12">
        <h1>Lentejas los jueves</h1>
        <figure>
            <img src="" alt="">
        </figure>
    </div> 
    <div class="col-12 text-end">
    <?php
    $nom=$_SESSION['name'];
        echo "Hola,  $nom.";
     
    ?>
    <a href="../cierre.php">Salir</a>
    </div>
</header>
   
    </div>
<div class="row">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark flex-column flex-sm-row sticky-top">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link active" href="mesasAd.php">Mesas</a></li>
            <li class="nav-item"><a class="nav-link active" href="cartaAd.php">Carta</a></li>
            <li class="nav-item"><a class="nav-link active" href="usuariosAd.php">Usuarios</a></li>
            <li class="nav-item"><a class="nav-link active" href="pedidosAd.php">Pedidos</a></li>
            <li class="nav-item"><a class="nav-link active" href="areaPAd.php">Area Personal</a></li>
        </ul>

    </nav>
</div>