<?php
session_start();
if(!$_SESSION['user_id']){
    header("location: ../../index.php");
} 
include_once("location ../../model/functions.php");
$usrModel = new usuariosModel();

$eliminar_usuario=(isset($_POST['eliminar_usuario'])) ? $_POST['eliminar_usuario'];

if ($eliminar_usuario==1) {

    $id = (isset($_POST['id'])) ? $_POST['id'] : "0";
    $result = $usrModel->eliminarUsuario($id);

    $respuesta = array();
    $respuesta['resultado']= $result;
    echo json_encode($respuesta);
}
?>