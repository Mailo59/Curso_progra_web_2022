<?php

include_once("../../model/functions.php");

$LoginModel= new LoginModel();

$usuario= $_POST['inUsuario'];
$clave = $_POST['inPassword'];

$result = array();
$result = $LoginModel->auntenticar($usuario, $clave);


?>
