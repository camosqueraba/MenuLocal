<?php
    $nombre_usuario = 'root';
    $password = '';
    $servidor = 'localhost';
    $base_datos = 'cumpleaños';

    try 
    {
        if ($connection =  mysqli_connect($servidor, $nombre_usuario, $password, $base_datos))
        {
            //echo 'cnexion establecida';
        }
        else
        {
            throw new Exception('no se pudo conectar');
        }
        
    }
    catch(Exception $e)
    {
        echo $e->getMessage();
    }

    $mes = date('m');
    //echo $mes;
    $consulta = "SELECT * FROM cumpleaneros Where MONTH (fecha_cumple) = $mes ORDER BY fecha_cumple";
    $result = mysqli_query($connection,$consulta);
    if(!$result) 
    {
        echo "No se ha podido realizar la consulta";
    }

    /*echo "<table>";
    echo "<tr>";
    echo "<th><h1>ID</th></h1>";
    echo "<th><h1>NOMBRE</th></h1>";
    echo "<th><h1>FECHA</th></h1>";
    echo "</tr>";
    
    while ($colum = mysqli_fetch_array($result))
    {
        $fecha =  date_create($colum['fecha_cumple']);
        $dia = date_format($fecha, 'd');

       /* echo "<tr>";
        echo "<td><h2>" . $colum['id']. "</td></h2>";
        echo "<td><h2>" . $colum['nombre'] . "</td></h2>";
        echo "<td><h2>" . $dia . "</td></h2>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close( $connection );

   echo "Fuera" ;*/
?>
