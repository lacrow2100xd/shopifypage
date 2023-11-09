<?php
include_once('../Models/usuario.municipio.php');
include_once('../Util/Config/config.php');
$usuariomunicipio = new UsuarioMunicipio();
session_start();

if($_POST['funcion']=='crear_direccion'){
    $id_usuario = $_SESSION['id'];
    $id_municipio=$_POST['id_municipio'];
    $direccion=$_POST['direccion'];
    $referencia=$_POST['referencia'];
    $usuariomunicipio->crear_direccion($id_usuario,$id_municipio,$direccion,$referencia);
    echo "success";
}
if($_POST['funcion']=='llenar_direcciones'){
   $id_usuario = $_SESSION['id'];
   $usuariomunicipio->llenar_direcciones($id_usuario);
   $json=array();
   foreach($usuariomunicipio->objetos as $objeto){
    $json[]=array(
        'id'=>openssl_encrypt($objeto->id,CODE,KEY),
        'direccion' =>$objeto->direccion,
        'referencia' =>$objeto->referencia,
        'departamento' =>$objeto->departamento,
        'municipio' =>$objeto->municipio,
        
    );
}
    $jsonstring = json_encode($json);
    echo $jsonstring;
   }
   if($_POST['funcion']=='eliminar_direccion'){
    $id_direccion = openssl_decrypt($_POST['id'],CODE,KEY);
    if(is_numeric($id_direccion)){
        $usuariomunicipio->eliminar_direccion($id_direccion);
        echo "success";
    }else {

        echo "error";
    }
   

}
