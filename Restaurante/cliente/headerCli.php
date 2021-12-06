<header>
    <div class=" col-12 text-uppercase text-center">
    <h1 class="display">Lentejas los jueves</h1>
    </div>
  
</header>


<nav class="navbar sticky-top navbar-expand-sm navbar-dark bg-dark">

        <div class="container-fluid justify-content-between">
            

            
            <a class="navbar-brand" href="#">
                <img src="../img/logoLent.png" alt="" style="width:40px">
            </a>
            <?php
                $nom=$_SESSION['name'];
                echo '<p class="d-block d-sm-none mb-2 h6 me-2"style="color: white;" >Hola,  '.$nom.'. </p>';
                ?>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_plegable">
                <span class="navbar-toggler-icon"></span>
            </button> 
            <div class="collapse navbar-collapse" id="navbar_plegable">
                <ul class="navbar-nav me-auto text-end">
                <li class="nav-item">
                    <a class="nav-link link-active"  href="indexCli.php">Inicio</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="pedidosCli.php">Pedidos</a></li>
                <li class="nav-item"><a class="nav-link" href="areaPCli.php">Area Personal</a></li>
                <li class="nav-item"><a class="nav-link" href="contactoCli.php">Contacto</a></li>
            </ul>
            <br>
            
            
            
            <?php
                $nom=$_SESSION['name'];
                echo '<p class="d-none d-sm-block mb-2 h6 me-3"style="color: white;" >Hola,  '.$nom.'. </p>';
                ?>
                <div class="d-flex justify-content-end">
                
                <a class="btn btn-light" href="../cierre.php"> <span class="badge bg-light text-dark"><img src="../img/salir.svg" alt=""></span> Salir</a>
    
                </div>
            </div>
            
        </div>
</nav>