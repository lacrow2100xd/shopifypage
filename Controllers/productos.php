<?php
include_once('../Models/productos.php');

$productos = new Productos();
session_start();


if($_POST['funcion']=='llenar_productos'){
   
    $productos->llenar_productos();
    $json=array();
    foreach($productos->objetos as $objeto){
        $json[]=array(

        'nombre' =>$objeto->nombre,
        'valor' =>$objeto->valor,
        'existencia' =>$objeto->existencia,
        'imagen' =>$objeto->imagen,
        'division' =>$objeto->division,
    );
    }
    
$jsonstring = json_encode($json);
echo $jsonstring;

if($_POST['funcion']=='insertar_pedido'){
    $montototal = $_POST['montototal'];
    $productos->insertar_pedido($montototal);
    echo 'success';
  
}

}
