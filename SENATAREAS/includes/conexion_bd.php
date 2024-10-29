<?php
try {
    $servidor = 'localhost';
    $usuario = 'root';
    $password = 'root';
    $bd = 'senatareas';

    $conexion = mysqli_connect($servidor, $usuario, $password, $bd);
} catch (\Throwable $th) {
    var_dump($th);
}