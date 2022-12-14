<?php

session_start();
if(!$_SESSION['user_id']){
    header("location: ../../index.php");
} 

include_once("../../model/functions.php");

$usrClass = new usuarioModel();

$result = array();
$result = $usrClass->getUsuarios();

?>

<div class="card">
    <div class="card-header">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-content">
    <h1>Listado de Usuarios</h1>
    </div>
    </div>

    <div class="card-body">
        <div class="container">
            <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"> ID </th>
                        <th scope="col"> NOMBRE </th>
                        <th scope="col"> USUARIO </th>
                        <th scope="col"> FECHA DE CREACIÓN </th>
                        <th scope="col"> FECHA DE ACTUALIZACIÓN </th>
                        <th scope="col"> ACTUALIZAR </th>
                        <th scope="col"> ELIMINAR </th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($fila = mysqli_fetch_array($result)){

                     ?>
                        <tr>
                           <th><?php echo $fila['id']; ?></th>
                           <th><?php echo $fila['nombres']." ".$fila['apellidos']; ?></th>
                           <th><?php echo $fila['usuario']; ?></th>
                           <th><?php echo $fila['usuario']; ?></th>
                           <th><?php echo $fila['usuario']; ?></th>
                           <th><?php echo $fila['usuario']; ?></th>
                           <th>
                           <div class="d-grid gap-2 d-md-flexx justify-content-md-end">
                                <button
                                    class="btn btn-warning me-md-2"
                                    id="btnActualizarUsuario"
                                    name="btnActualizaUsuario"
                                    type="button"
                                >
                                Actualizar
                                </button>
                            </div>
                           </th>
                           <th>
                            <div class="d-grid gap-2 d-md-flexx justify-content-md-end">
                                <button
                                    class="btn btn-danger me-md-2"
                                    id="btnEliminarUsuario"
                                    name="btnEliminaUsuario"
                                    type="button"
                                    onclick="eliminar"
                                >
                                Eliminar
                                </button>
                            </div>
                           </th>
  
                        </tr>
                        <?php }?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
<script>x</script>