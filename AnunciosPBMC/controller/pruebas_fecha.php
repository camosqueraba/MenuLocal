<?php 

    require ('FechaController.php');
    $fecha = new FechaController();

    echo $fecha->fecha_actual;
    echo '<br>';
    echo $fecha->dia_actual;
    echo '<br>';
    echo $fecha->mes_actual;

    echo $fecha->obtenerNombreMesActual();
    echo $fecha->obtenerDiaActual();

?>