<?php
print_r($_POST);
if (!isset($_POST['id'])) {
    header('Location: ../../categoria.php?mensaje=error');
}

include '../../../../conexionBD.php';
$id = $_POST['id'];
$nombre = $_POST['txtNombre'];
$descripcion = $_POST['txtDescripcion'];
$img = $_FILES['imagen'];

$name = $img['name'];
$tmpname = $img['tmp_name'];
$destino = "http://localhost/PROYECTO_GESTION/PROYECTO_TERMINADO/Menu%20CRUD%203.1/sistema/cliente/Assets/categorias/".$name;

if (empty($name)) {
    $name = "default.jpg";
}

$sentencia = $bd->prepare("UPDATE categoria SET nombre = ?, descripcion = ?, imagen = ? where id_categoria = ?;");
$resultado = $sentencia->execute([$nombre, $descripcion, $name, $id]);

if ($resultado === TRUE) {
    header('Location: ../../plantilla.php?page=categoria');
    move_uploaded_file($tmpname, $destino);
} 

else {
    header('Location: ../../categoria.php?mensaje=error');
    exit();
}
