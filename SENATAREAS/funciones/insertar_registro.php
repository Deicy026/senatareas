<?php

require '../crear_cuenta.php';

$insertar_datos = capturarDatos();
if ($insertar_datos !=null) {
var_dump($insertar_datos);
$identificacion = $insertar_datos['identifica'];
$nombre1 = $insertar_datos['nombre1'];
$nombre2 = $insertar_datos['nombre2'];
$apellido1 = $insertar_datos['apellido1'];
$apellido2 = $insertar_datos['apellido2'];
$fecha = $insertar_datos['fecha_nac'];
$celular = $insertar_datos['celular'];
$email = $insertar_datos['email'];
$contra = $insertar_datos['contra'];
$fecha = date('Y-m-d', strtotime($fecha));



require '../includes/conexion_bd.php';

$sql ='INSERT INTO aprendices (cod, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, fecha_nac, celular, email, contra) VALUES (' . $identificacion . ', "' . $nombre1 . '", "' . $nombre2 . '", "' . $apellido1 . '", "' . $apellido2 . '", "' . $fecha . '", "' . $celular . '", "' . $email . '", "' . $contra . '");';

$consul = mysqli_query($conexion, $sql);
if ($consul) {
echo "<script>alert('Registro exitoso');</script>";
}



}
?>
