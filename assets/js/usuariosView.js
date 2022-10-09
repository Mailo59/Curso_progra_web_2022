function eliminarUsuario(id){
    $.ajax({
        type: 'POST',
        data: 'eliminar_usuario=1&id='+id,
        url: 'controller/login/usuariosController.php',
        dataType: 'json',
        success: function(data){
            var resultado= data.resultado;
            if(resultado==1){
                alert('Usuario Eliminado correctamente');
                cargarContenido('view/Usuarios/usuariosView.php');
            }else{
                alert('No se pudo eliminar el usuario');
            }
        }
    });
}