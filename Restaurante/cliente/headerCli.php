<header class="row">
    <div class="columna col-12">
        <h1>Lentejas los jueves</h1>
        <figure>
            <img src="" alt="">
        </figure>
    </div>
    <div class="columna col-12 text-end">
        <?php
        $nom=$_SESSION['name'];
            echo "Hola,  $nom.";
        ?>
        <a href="../cierre.php">Salir</a>
    </div>
</header>
<div class="row">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark flex-column flex-sm-row sticky-top">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link active" href="indexCli.php">Inicio</a></li>
            <li class="nav-item"><a class="nav-link active" href="pedidosCli.php">Pedidos</a></li>
            <li class="nav-item"><a class="nav-link active" href="areaPCli.php">Area Personal</a></li>
            <li class="nav-item"><a class="nav-link active" href="contactoCli.php">Contacto</a></li>
            
        </ul>

    </nav>
</div>
