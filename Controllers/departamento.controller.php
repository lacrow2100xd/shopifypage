<?php
include_once('../Models/departamento.php');
$departamento = new Departamento();
session_start();

if($_POST['funcion']=='llenar_departamentos'){
    $departamento->llenar_departamentos();
   foreach($departamento->objetos as $objetos){
        $json[]=array(
            'id'=>$objetos->id,
            'nombre'=>$objetos->nombre
        );

    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
}

?>
