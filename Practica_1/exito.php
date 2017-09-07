<?php
ini_set("display_errors", 1);
if(isset($_POST['nombre_s']))
{

    $nombre = $_POST['nombre_s'];
    $email = $_POST['email_s'];
    $telefono = $_POST['tel_s'];


    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("location:practica_1.php?mensaje=2");
    }else{
        header("location:practica_1.php?mensaje=3");
    }

}
else{
    header("location:practica_1.php?mensaje=1");
}

?>