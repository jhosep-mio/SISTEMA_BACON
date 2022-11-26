<?php
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["txtUsuario"]) || empty($_POST["txtCorreo"]) || empty($_POST["txtPassword"]) ){
        header('Location: ../../usuarios.php?mensaje=falta');
        exit();
    }

    include_once '../../../../conexionBD.php';
    $usuario = $_POST['txtUsuario'];
    $correo = $_POST['txtCorreo'];
    $password = $_POST['txtPassword'];

    
    $sentencia = $bd->prepare("INSERT INTO usuarios(user, email, pass) VALUES (?,?,?);");
    $resultado = $sentencia->execute([$usuario, $correo, $password]);

    if ($resultado === TRUE) {
        header('Location: ../../plantilla.php?mensaje=registrado');?>
    <?php
    } else {
        header('Location: ../../plantilla.php?mensaje=error');
        exit();
    }
    
?>