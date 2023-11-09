<?php
include_once('Conexion.php');
class Municipios{
    
    var $objetos;
    
    public function __construct(){
        $db = new Conexion();
        $this->acceso = $db->pdo;
    }
    function llenar_municipios($departamento_id){
        $sql="SELECT * from municipios
                WHERE departamento_id=:id";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':id'=>$departamento_id));
        $this->objetos = $query->fetchAll();
        return $this->objetos;
    }
}


