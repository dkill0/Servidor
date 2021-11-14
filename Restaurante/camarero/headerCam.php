<header>
        <h1>Lentejas los jueves</h1>
        <figure>
            <img src="" alt="">
        </figure>
    </header>
    <div class="sesion">
    <?php
    $nom=$_SESSION['name'];
        echo "<p>Hola,  $nom.</p>";
     
    ?>
    <p><a href="../cierre.php">Salir</a></p>
    </div>
    <nav>
    <ul>
        <li><a href="mesasCam.php">Mesas</a></li>
        <li><a href="pedidosCam.php">Pedidos</a></li>
        <li><a href="areaPCam.php">Area Personal</a></li>
    </ul>

</nav>