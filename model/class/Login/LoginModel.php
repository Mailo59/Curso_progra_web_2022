<?php

class loginModel {
    

    function autenticar($user, $password){
        $connClass = new Tools();
        $conexion = $connClass->conectar();


        $sql = "SELECT 
        * 
        FROM 
        users 
        WHERE 
        UPPER(usuario)= UPPER('$users') 
        and password ='$pass' ";
    $resultado = mysqli_query($conexion, $sql);
    $connClass->desconectar($conexion);

    return $resultado;
    
}

}

?>