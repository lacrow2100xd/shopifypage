<?php
include_once('../Models/municipios.php');
$municipios = new Municipios();
session_start();

if($_POST['funcion']=='llenar_municipios'){
    $departamento_id=$_POST['departamento_id'];
    $municipios->llenar_municipios($departamento_id);
    $json=array();
    foreach($municipios->objetos as $objetos){
        $json[]=array(
            'id'=>$objetos->id,
            'nombre'=>$objetos->nombre
        );

    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
}

