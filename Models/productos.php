<?php
include_once('Conexion.php');
class Productos{
    
    var $objetos;
    
    public function __construct(){  
        $db = new Conexion();
        $this->acceso = $db->pdo;
    }

    function llenar_productos(){
        $sql="SELECT nombre, valor, existencia, imagen, dividir, valor/12 as division FROM productos WHERE estado='A' "; 
        $query = $this->acceso->prepare($sql);
        $query->execute(); 
        $this->objetos = $query->fetchAll();
        return $this->objetos;
    }

    function llenar_cuotas(){
        $sql="UPDATE productos SET dividir=(valor/12) WHERE estado='A'";
        $query = $this->acceso->prepare($sql);
        $query->execute(); 
        $this->objetos = $query->fetchAll();
        return $this->objetos;
    }

    
    function insertar_pedido($montototal){
        $sql="INSERT INTO pedidos (monto) 
            VALUES(:monto)";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':monto'=>$montototal));
        
    }

    

}
