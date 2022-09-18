<?php 

    function conexion(){
        // VARIABLES DE CONEXION
        $host = "localhost";
        $usuario = 'root' ;
        $password = 'Admin.123';
        $database = 'prueba';

        $conexion = mysqli_connect($host, $usuario, $password, $database);
    

    if ($conexion) {
        echo "CONEXION EXITOSA";
        mysqli_query($conexion, "SET NAMES 'utf8'");
    }else {
        echo "CONEXION FALLIDA".mysqli_error();
    }

    return $conexion;

    }



    mysqli_close($resultado);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php 
        $resultado = conexion();
        ?> </h1>
    
</body>
</html>

<?php 
mysql_close(resultado);
?>