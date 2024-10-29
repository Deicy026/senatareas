<?php

function consultarAprendices()
{
    try {
        require __DIR__.'/conexion_bd.php';

        $sql = "SELECT CONCAT(a.primer_nombre, ' ', a.primer_apellido) AS nombre, fecha_nac, celular, email  FROM aprendices a;";
        $consulta = mysqli_query($conexion, $sql);

        return $consulta;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    
}