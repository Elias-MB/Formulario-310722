<?php 

include("con_db.php");

if (isset($_POST['registrar'])) {
    if (strlen($_POST['apellido-pat']) >= 1 &&
        strlen($_POST['apellido-mat']) >= 1 &&
        strlen($_POST['nombres']) >= 1 &&
        strlen($_POST['edad']) >= 1 ) {
        
        $ape_pat = trim($_POST['apellido-pat']);
        $ape_mat = trim($_POST['apellido-mat']);
        $nombres = trim($_POST['nombres']);
        $edad = trim($_POST['edad']);
        $celular = trim($_POST['celular']);
        $red = trim($_POST['red--']);
        
        $consulta = "INSERT INTO datos(a_paterno, a_materno, nombres, edad, celular, red) VALUES ('$ape_pat','$ape_mat','$nombres','$edad','$celular', '$red')";
        $resultado = mysqli_query($conex, $consulta);
        if ($resultado) {
            header('Location: /FORMULARIOS/registro_310722/post.php');
        }
    }
}
?>