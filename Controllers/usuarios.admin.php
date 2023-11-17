<?php
include_once('../Models/usuarios.admin.php');
include_once('../Util/Config/config.php');
include_once('../Models/usuario.php');

$usuariosadmin = new UsuariosAdmin();
session_start();



   if($_POST['funcion']=='eliminar_usuario'){
    $id = $_POST["id"];
    $usuariosadmin->eliminar_usuario($id);
    echo "success";
   

}


if($_POST['funcion']=='contarVehiculos'){
    
    $usuariosadmin->contarVehiculos();
    

}



