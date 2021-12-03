<?php
include("../Seguridad.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("meta2.php"); ?>
    <title>Carta</title>

</head>

<body>
    <?php
    include("headerCli.php");



    ?>
    <div class="container-fluid">
        <?php

        if (isset($_GET['ordena'])) {
            $ordena = $_GET['ordena'];
        } else {
            $ordena = 1;
        }

        switch ($ordena) {
            case 1:
                $ordena="tipo";
                print '
                <div class="dropdown dropend">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"><span></span>Filtrar </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="ejemplo-desplegable">';

                print '
						<li><a href="verCarta.php?ordena=1" class="dropdown-item">Tipo</a></li>
						<li><a href="verCarta.php?ordena=2" class="dropdown-item">A-Z</a></li>
						<li><a href="verCarta.php?ordena=3" class="dropdown-item">Precio (mayor a menor)<span></span></a></li>
                        <li><a href="verCarta.php?ordena=4" class="dropdown-item">Precio (menor a mayor)<span></span></a></li>
                        ';


                print ' </ul>
                    </div>
                    <article class=" col-12">
                        <div style="position: sticky; top:65px; z-index: 2;" class=" fondoT row mb-3">
                            <h2 class=" fw-bold titulo text-center text-uppercase">Entrantes</h2>
                        </div>
                        <div class="row justify-content-around g-3 ">
            ';


                $tipo = 5;
                include("./productos.php");


                print ' </div>

                    </article>
                    <article class=" col-12 mt-3">
                        <div style="position: sticky; top:65px; z-index: 2;" class=" fondoT  row">
                            <h2 class=" fw-bold titulo text-center text-uppercase">Platos</h2>

                        </div>
                        <div class="row justify-content-between">
               ';
                $tipo = 6;
                include("./productos.php");

                print ' </div>
                    </article>
                    <article class=" col-12 mt-3">
                        <div style="position: sticky; top:65px; z-index: 2;" class=" fondoT  row">
                            <h2 class=" fw-bold titulo text-center text-uppercase">Postres</h2>
                        </div>
                        <div class="row justify-content-between">
            ';
                $tipo = 7;
                include("./productos.php");

                print '</div>
                </article>
                <article class=" col-12 mt-3">
                    <div style="position: sticky; top:65px; z-index: 2;" class=" fondoT  row">
                        <h2 class=" fw-bold titulo text-center text-uppercase">Bebidas</h2>
                    </div>

                    <div class="row justify-content-between">
            ';
                $tipo = 4;
                include("./productos.php");
                print '   
                    </div>
                </article>
        ';
                break;
            case 2:
                $ordena="nombre";
                print '
                <div class="dropdown dropend">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"><span></span>Filtrar </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="ejemplo-desplegable">';

                print '
						<li><a href="verCarta.php?ordena=1" class="dropdown-item">Tipo</a></li>
						<li><a href="verCarta.php?ordena=2" class="dropdown-item">A-Z</a></li>
						<li><a href="verCarta.php?ordena=3" class="dropdown-item">Precio (mayor a menor)<span></span></a></li>
                        <li><a href="verCarta.php?ordena=4" class="dropdown-item">Precio (menor a mayor)<span></span></a></li>
                        ';


                print ' </ul>
                    </div>
                    <article class=" col-12">
                        <div style="position: sticky; top:65px; z-index: 2;" class=" fondoT row mb-3">
                            <h2 class=" fw-bold titulo text-center text-uppercase">Orden alfabético</h2>
                        </div>
                        <div class="row justify-content-around g-3 ">
            ';
                include("productos.php");
            print ' </div>';

                break;
            case 3:
                $ordena="precio DESC";
                print '
                <div class="dropdown dropend">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"><span></span>Filtrar </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="ejemplo-desplegable">';

                print '
						<li><a href="verCarta.php?ordena=1" class="dropdown-item">Tipo</a></li>
						<li><a href="verCarta.php?ordena=2" class="dropdown-item">A-Z</a></li>
						<li><a href="verCarta.php?ordena=3" class="dropdown-item">Precio (mayor a menor)<span></span></a></li>
                        <li><a href="verCarta.php?ordena=4" class="dropdown-item">Precio (menor a mayor)<span></span></a></li>
                        ';


                print ' </ul>
                    </div>
                    <article class=" col-12">
                        <div style="position: sticky; top:65px; z-index: 2;" class=" fondoT row mb-3">
                            <h2 class=" fw-bold titulo text-center text-uppercase">Precio (mayor a menor)</h2>
                        </div>
                        <div class="row justify-content-around g-3 ">
            ';
                include("productos.php");
            print ' </div>';
                break;
            
            case 4:
                $ordena="precio ASC";
                print '
                <div class="dropdown dropend">
                    <button style="position: sticky; top: 100px; z-index: 2" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"><span></span>Filtrar </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="ejemplo-desplegable">';

                print '
						<li><a href="verCarta.php?ordena=1" class="dropdown-item">Tipo</a></li>
						<li><a href="verCarta.php?ordena=2" class="dropdown-item">A-Z</a></li>
						<li><a href="verCarta.php?ordena=3" class="dropdown-item">Precio (mayor a menor)<span></span></a></li>
                        <li><a href="verCarta.php?ordena=4" class="dropdown-item">Precio (menor a mayor)<span></span></a></li>
                        ';


                print ' </ul>
                    </div>
                    <article class=" col-12">
                        <div style="position: sticky; top:65px; z-index: 2;" class=" fondoT row mb-3">
                            <h2 class=" fw-bold titulo text-center text-uppercase">Precio (menor a mayor)</h2>
                        </div>
                        <div class="row justify-content-around g-3 ">
            ';
                include("productos.php");
            print ' </div>';
                break;
            default:
                print 'No se ha seleccionado el orden';
                break;
        }


        ?>
    </div>
</body>

</html>