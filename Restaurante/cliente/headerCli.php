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
        <li><a href="indexCli.php">Inicio</a></li>
        <li><a href="pedidosCli.php">Pedidos</a></li>
        <li><a href="areaPCli.php">Area Personal</a></li>
        <li><a href="contactoCli.php">Contacto</a></li>
        
    </ul>

</nav>