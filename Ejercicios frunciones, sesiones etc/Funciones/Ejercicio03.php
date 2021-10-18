<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    //Funcion que te dice si el dia de la semana es fin de semana o laboral
        function diaSemana($letra){
           
            switch ($letra) {
                case 'L':
                    $res="Laboral";                 
                    break;
                case 'M':
                    $res="Laboral";                
                    break;
                case 'X':
                    $res="Laboral";               
                    break;
                case 'J':
                    $res="Laboral";                 
                    break;
                case 'V':
                    $res="Laboral";                   
                   break;
                case 'S':
                    $res="Fin de semana";               
                    break;
                case 'D':
                    $res="Fin de semana";           
                        break;
                default:
                $res="No es el formato correcto";  
                    break;
            }
            return $res;
        }
    ?>
</head>
<body>
<form method="post" action="Ejercicio03.php">
    <p>Introduce un día de la semana (L, M, X, J, V, S, D): </p>
    <input name="dia" type="text" maxlength="30" size="40" pattern="[L,M,X,J,V,S,D]">
    <br><br>
    <input type="submit" value="Enviar"> 
    <input type="reset" value="Borrar"> 
    <br><br>
    </form>
        <?php
            $letra="";
            if(isset ($_POST['dia']) && !empty($_POST['dia'])){
               $letra= $_POST['dia']; 
           
           }

           print(diaSemana($letra));
        ?>
</body>
</html>