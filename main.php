<?php
session_start();
if(!$_SESSION['user_id'
]){
    header("location: index.php");
}

echo "HOLA MUNDO, BIENVENIDO AL SISTEMA WEB: ".$_SESSION[
'user_nombre'];

?>

include 'template/header.php';

include 'template/userinfo.php';
