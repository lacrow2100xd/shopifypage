<?php
include_once('../Models/vender.php');
$producto = new Producto();
session_start();


if($_POST['funcion']=='insert_producto'){ 
    $id_usuario = $_SESSION['id'];
    $nombre = $_POST['nombre'];
    $valor = $_POST['valor'];
    $existencia = $_POST['existencia'];
    $imagen = $_FILES['imagen']['name'];
    
  
        $nombreunico = uniqid().'-'.$imagen;
        $ruta = '../Util/Img/productos/' .$nombreunico;
        move_uploaded_file($_FILES['imagen']['tmp_name'],$ruta);
        
        $id_categoria = $_POST['id_categoria'];
       
        if($_POST['funcion']=='insert_producto'){ 
            $producto->actualizar_id_tipo($id_usuario);
        }
   
    $producto->insert_producto($id_usuario,$nombre,$valor,$existencia,$nombreunico,$id_categoria);
    echo 'success';


}

?>
