<?php
include_once('Conexion.php');
class UsuariosAdmin{
    
    var $objetos;
    
    public function __construct(){  
        $db = new Conexion();
        $this->acceso = $db->pdo;
    }
 

    function eliminar_usuario($id){
        $sql="UPDATE usuarios SET estado='I' WHERE id=:id";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':id'=>$id));
        
    }

    function contarVehiculos(){
        $sql="SELECT COUNT(*) FROM productos WHERE id_categoria = 1; AND estado='A'";
        $query = $this->acceso->prepare($sql);
        $query->execute();
        
    }



    
}

