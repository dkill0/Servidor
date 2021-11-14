<header>
        <h1>Lentejas los jueves</h1>
        <figure>
            <img src="" alt="">
        </figure>
    </header>
    <div class="sesion">
    <?php
    $nom=$_SESSION['name'];
        echo "<p>Hola,  $nom. </p>";
     
    ?>
    <p><a href="../cierre.php">Salir</a></p>
    </div>
    <nav>
    <ul>
        <li><a href="mesasAd.php">Mesas</a></li>
        <li><a href="cartaAd.php">Carta</a></li>
        <li><a href="usuariosAd.php">Usuarios</a></li>
        <li><a href="pedidosAd.php">Pedidos</a></li>
        <li><a href="areaPAd.php">Area Personal</a></li>
    </ul>

</nav>