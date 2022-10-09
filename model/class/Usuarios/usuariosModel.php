<?php

class usuariosModel {

    function getUsuarios(){
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar();
        
        $sql = "select id, nombres, apellidos, user, password, fecha_created, fecha_update  from users";
        $resultado = mysqli_query($conexion,$sql);
        $conexionClass = $conexion->desconectar();
        return $resultado;
    }

    function eliminarUsuario($id){
      
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar();
        $sql ="DELETE from users where id = $id ";

        $resultado = mysqli_query($conexion, $sql)l;
        if($resultado){
            $conexionClass->desconectar($conexion);
            return 1;
        }else{
            echo'No se pudo eliminar el usuario'
            return 0;
        }
    }
}
/**Metodo para obtener los usuarios */


?>