<?php
include_once('Conexion.php');
class UsuarioMunicipio{
    
    var $objetos;
    
    public function __construct(){  
        $db = new Conexion();
        $this->acceso = $db->pdo;
    }
    function crear_direccion($id_usuario,$id_municipio,$direccion,$referencia){
        $sql="INSERT INTO usuario_municipio (direccion,referencia,id_municipio,id_usuario) 
            VALUES(:direccion,:referencia,:id_municipio,:id_usuario)";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':direccion'=>$direccion,':referencia'=>$referencia,':id_municipio'=>$id_municipio,':id_usuario'=>$id_usuario));
    }

    function llenar_direcciones($id_usuario){
        $sql="SELECT um.id as id, direccion,referencia,m.nombre as municipio,dep.nombre as departamento FROM usuario_municipio um
        JOIN municipios m ON m.id=um.id_municipio 
        JOIN departamentos dep ON dep.id=m.departamento_id
        WHERE id_usuario=:id AND um.estado='A'"; 
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':id'=>$id_usuario)); 
        $this->objetos = $query->fetchAll();
        return $this->objetos;
    }

    function eliminar_direccion($id_direccion){
        $sql="UPDATE usuario_municipio SET estado='I' WHERE id=:id_direccion";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':id_direccion'=>$id_direccion));
        
    }

    
}

