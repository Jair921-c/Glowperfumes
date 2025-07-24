<?php
include 'conexion_be.php';

$nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
$marca = mysqli_real_escape_string($conexion, $_POST['marca']);
$ml = mysqli_real_escape_string($conexion, $_POST['ml']);
$precio = mysqli_real_escape_string($conexion, $_POST['precio']);

$insertar = "INSERT INTO productos (nombre, marca, ml, precio) VALUES ('$nombre','$marca','$ml','$precio')";

$resultado = mysqli_query($conexion, $insertar);

if ($resultado) {
    echo '<script>alert("Perfume registrado correctamente"); window.location = "../index.php";</script>';
} else {
    echo '<script>alert("Error al registrar perfume"); window.history.go(-1);</script>';
}
?>
