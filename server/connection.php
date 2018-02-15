<?php
    require_once('parameters.php');
    $conexion = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
    $query = '';

    if(!$conexion){
        echo "Error: No se pudo conectar a la base de datos.".PHP_EOL;
        exit;
    }


    function rellenarTabla(){
        global $conexion, $query;
        $sql = 'SELECT * FROM alumnos';
        return $conexion->query($sql);
    }
