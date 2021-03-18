<?php
//$serverName = "serverName\sqlexpress"; //serverName\instanceName

// Puesto que no se han especificado UID ni PWD en el array  $connectionInfo,
// La conexión se intentará utilizando la autenticación Windows.
//$connectionInfo = array( "Database"=>"dbName");

$serverName = "192.168.1.95"; //serverName\instanceName
$connectionInfo = array( "Database"=>"nomina", "UID"=>"sa", "PWD"=>"sa1_xxxx");


//$serverName = "serverName\sqlexpress, 1542"; //serverName\instanceName, portNumber (por defecto es 1433)
//$connectionInfo = array( "Database"=>"dbName", "UID"=>"userName", "PWD"=>"password");

$conn = sqlsrv_connect( $serverName, $connectionInfo);



if( $conn ){
     echo "Conexión establecida.<br />";
}
else {
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}

$query = "SELECT day(FechaNac) Dia , E.Nombre1 +' '+ E.Apellido1+' '+E.Apellido2 AS Empleado
            FROM nEmpleados E
            JOIN nContratos C ON E.IdEmpleado=C.IdEmpleado
            WHERE MONTH(FechaNac)='03' AND C.Activo='1'
            ORDER BY Dia";
    $res =  sqlsrv_query($conn, $query, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
    if (0 !== sqlsrv_num_rows($res)){
        while ($fila = sqlsrv_fetch_array($res)) {
            echo "Personal: ".utf8_encode($fila['nombres'])." "
                .utf8_encode($fila['ap_pat'])." "
                .utf8_encode($fila['ap_mat']);
            echo "<br>";
        }
    }

?>