<?php 

include("con_db.php");

$consulta = "SELECT a_paterno, a_materno, nombres FROM datos WHERE 2";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/estilosPost.css">
</head>
<body>
    <main>
        <div class="contenedor">
            <div class='check'>
                <img src='assets/imagenes/checkmark__.gif' alt='#' class='check_img'>
            </div>
            <h2>TE HAS REGISTRADO CON ÉXITO..!</h2>
            <div class='datos'>
                <h3>
                <?php 
                $resultado = mysqli_query($conex, $consulta);
                $row = mysqli_fetch_assoc($resultado);
                echo $row["nombres"];
                ?>
                </h3>
                <!-- <div class='contenedor_turno'>
                    <div class='turno'>
                        <input type="button" name="primer_turno" value="8:00 am - 9:00 am">
                    </div>
                </div> -->
            </div>
            <div class='linea'>
            </div>
            <!-- <div class='contenedor_logo'>
                <img src='assets/imagenes/Logo-IACyM-web-horizontal.png' alt='#' class='logo'>
            </div> -->
            <div class='direccion'>
                <p>CIENEGUILLA</p>
            </div>
        </div>       
    </main>
</body>
</html>