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


}


if($_POST['funcion']=='insertar_pedido'){
   
    $productos->insertar_pedido( 
        $_POST["montototal"],
        $nombres=$_SESSION['nombres'],
        $apellidos=$_SESSION['apellidos'],
        $email=$_SESSION['email'],
        $telefono=$_SESSION['telefono'],
    );


}




