<?php
include("../Seguridad.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("../cliente/meta2.php"); ?>
    <title>Area Personal</title>
</head>

<body>
    <?php
    include("headerAd.php");
    ?>
    <div class=" container-fluid">
        <?php


        $idUs = $_SESSION['idUsuario'];
        $email1 = $_SESSION['email'];
        $contra1 = $_SESSION['password'];

        include("../conexion.php");

        if (isset($_POST['email'])) {

            $email = $_POST['email'];
            if (empty($email) || is_null($email) || $email == "null") {
                $_SESSION['email'] = $email1;
            } else {
                $consulta = "UPDATE usuario SET email='$email' WHERE idUser='$idUs'";
                //ejecutamos la sentencia SQL
                mysqli_query($conn, $consulta);
                $_SESSION['email'] = $email;
                echo mysqli_error($conn);
            }
        }

        if (isset($_POST['contra'])) {
            $contra = $_POST['contra'];
            if (empty($contra) || is_null($contra) || $contra == "null") {
                $_SESSION['password'] = $contra1;
            } else {
                $consulta = "UPDATE usuario SET contrasena='$contra' WHERE idUser='$idUs'";
                //ejecutamos la sentencia SQL
                mysqli_query($conn, $consulta);
                $_SESSION['password'] = $contra;
                mysqli_error($conn);
            }
        }
        ?>




        <section class="row justify-content-center">
            <article class="col-7 datos">
                <div class="row  justify-content-around">
                    <h3>Datos Personales</h3>
                    <hr>

                    <div class="col-3">
                        <p>Nombre</p>
                    </div>
                    <div class="col">
                        <?php $nombre = $_SESSION['name'];
                        echo '<input type="text" class="form-control text-capitalize" name="nombre" id="nombre" value="' . $nombre . '" readonly="readonly">';
                        ?>
                    </div>
                </div>
                <hr>
                <form action="" method="POST">
                    <div class="row  justify-content-between">
                        <div class="col-3">
                            <p>Email</p>
                        </div>
                        <div class="col">
                            <?php $email = $_SESSION['email'];
                            echo '<input type="text" class="form-control" name="email" id="email" value="' . $email . '">';
                            ?>
                        </div>
                        <div class="col-3">
                            <button class="btn btn-primary" type="submit"><span class="badge"><img src="../img/editar.svg" alt=""></span></button>
                        </div>
                    </div>
                </form>

                <hr>
                <form action="" method="POST">

                    <div class="row justify-content-bewteen">
                        <div class="col-3">
                            <p>Contraseña</p>

                        </div>
                        <div class="col">

                            <?php $contra = $_SESSION['password'];
                            echo '<input type="text" class="form-control" name="contra" id="contra" value="' . $contra . '">';

                            ?>
                        </div>
                        <div class="col-3">

                            <button class="btn btn-primary" name="edita" type="submit"><span class="badge"><img src="../img/editar.svg" alt=""></span></button>
                        </div>
                    </div>
                    <hr>
                </form>
            </article>
            <footer></footer>
        </section>
    </div>

</body>

</html>