<?php
ob_start();
session_start();
echo "Paso 1";
include_once("../../model/functions.php");
echo "Paso 2";
$loginModel= new loginModel();


$usuario= $_POST['inUsuario'];
$clave = $_POST['inPassword'];

$result = array();
$result = $loginModel->autenticar($usuario, $clave);

if($row = mysqli_fetch_array($result)){
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['user_nombre'] = $row['nombres'];
    $_SESSION['user_apellido'] = $row['apellidos'];
    $_SESSION['username'] = $row['user'];
    
    header("location: ../../main.php");
    
}else{


    echo "<script>
        alert('AUTENTICACION FALLIDA, AL PARECER SU USARIO Y CLAVE SON INVALIDOS')
        history.back();
    </script>";
    exit(-1);
}


ob_end_flush();
?>