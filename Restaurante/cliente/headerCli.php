<header class="cabe row">
    <div class=" col-12 text-uppercase text-center">
    <h1 class="display">Lentejas los jueves</h1>
    </div>
    <div class="col-12 text-end iniS">
        <?php
        $nom=$_SESSION['name'];
            echo "Hola,  $nom.";
        ?>
        <a class="iniS me-2" href="../cierre.php">Salir</a>
    </div>
</header>
<nav class="navbar navbar-expand sticky-top navbar-dark bg-dark">
        <div class="container-fluid justify-content-start">
        <a class="navbar-brand"href="index.php"><img class="rounded" src="../img/logoLent.png"></a>
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="indexCli.php">Inicio</a></li>
            <li class="nav-item"><a class="nav-link" href="pedidosCli.php">Pedidos</a></li>
            <li class="nav-item"><a class="nav-link" href="areaPCli.php">Area Personal</a></li>
            <li class="nav-item"><a class="nav-link" href="contactoCli.php">Contacto</a></li>
            
        </ul>

    </nav>
</div>
