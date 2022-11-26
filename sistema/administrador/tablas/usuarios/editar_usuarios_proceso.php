<?php
    print_r($_POST);
    if(!isset($_POST['id'])){
        header('Location: ../../usuarios.php?mensaje=error');
    }

    include '../../../../conexionBD.php';
    $id = $_POST['id'];
    $usuario = $_POST['txtUsuario'];
    $correo = $_POST['txtCorreo'];
    $password = $_POST['txtPassword'];

    $sentencia = $bd->prepare("UPDATE usuarios SET user = ?, email = ?, pass = ? where id = ?;");
    $resultado = $sentencia->execute([$usuario, $correo, $password, $id]);

    if ($resultado === TRUE) {
        header('Location: ../../plantilla.php?mensaje=editado');
    } else {
        header('Location: ../../plantilla.php?mensaje=error');
        exit();
    }
    
?>