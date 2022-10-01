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
        UPPER(user)=  UPPER('$user') 
        and password ='$password' ";
        
    $resultado = mysqli_query($conexion, $sql);
    $connClass->desconectar($conexion);

    return $resultado;
    
}

}

?>