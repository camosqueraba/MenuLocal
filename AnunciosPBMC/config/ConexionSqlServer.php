<?php
//$serverName = "serverName\sqlexpress"; //serverName\instanceName

// Puesto que no se han especificado UID ni PWD en el array  $connectionInfo,
// La conexión se intentará utilizando la autenticación Windows.
//$connectionInfo = array( "Database"=>"dbName");

$serverName = "192.168.1.95"; //serverName\instanceName
$connectionInfo = array( "Database"=>"nomina", "UID"=>"sa", "PWD"=>"sa1_xxxx");


//$serverName = "serverName\sqlexpress, 1542"; //serverName\instanceName, portNumber (por defecto es 1433)
//$connectionInfo = array( "Database"=>"dbName", "UID"=>"userName", "PWD"=>"password");

//$conn = sqlsrv_connect( $serverName, $connectionInfo);

try 
    {
        if ($connection =  sqlsrv_connect($serverName, $connectionInfo))
        {
            //echo 'cnexion establecida';
        }
        else
        {
            die( print_r( sqlsrv_errors(), true));
            throw new Exception('no se pudo conectar');
        }
        
    }
    catch(Exception $e)
    {
        echo $e->getMessage();
    }
/*
if( $conn ){
     echo "Conexión establecida.<br />";
}
else {
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}*/


$mes = date('m');
$consulta = "SELECT day(FechaNac) Dia , E.Nombre1 +' '+ E.Apellido1+' '+  E.Apellido2 AS Empleado
            FROM nEmpleados E
            JOIN nContratos C ON E.IdEmpleado=C.IdEmpleado
            WHERE MONTH(FechaNac)= $mes AND C.Activo='1'
            ORDER BY Dia";
    
    
    $result =  sqlsrv_query($connection, $consulta, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
    if(!$result){
        echo "No se ha podido realizar la consulta";
    }
    
    /*
    if (0 !== sqlsrv_num_rows($result)){
        while ($fila = sqlsrv_fetch_array($res)) {
            echo "Personal: ".utf8_encode($fila['Dia'])." "
                .utf8_encode($fila['Nombre1'])." "
                .utf8_encode($fila['Apellido1']);
            echo "<br>";
        }
    }
    */
?>