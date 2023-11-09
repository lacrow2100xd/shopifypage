<?php

include_once('Conexion.php');

class Producto{
    var $objetos;

    public function __construct(){
        $db = new Conexion();
        $this->acceso = $db->pdo;
    }
   
    function insert_producto($id_usuario,$nombre,$valor,$existencia,$imagen,$id_categoria){

        $sql="INSERT INTO productos (nombre,valor,existencia,imagen,id_usuario,id_categoria) 
            VALUES(:nombre,:valor,:existencia,:imagen,:id_usuario,:id_categoria)";
            $query = $this->acceso->prepare($sql);
            $variables = array(
            ':nombre'=>$nombre,
            ':valor'=>$valor,
            ':existencia'=>$existencia,
            ':imagen'=>$imagen,
            ':id_usuario'=>$id_usuario,
            ':id_categoria'=>$id_categoria
        );  
    $query->execute($variables);
        
        
    }

    function actualizar_id_tipo($id_usuario){

        $sql="UPDATE usuarios SET id_tipo='3' WHERE id=:id_usuario";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':id_usuario'=>$id_usuario));
        
    }

}


?>