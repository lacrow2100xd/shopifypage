<?php 


    class Productos extends Conectar{
        
        
        public function total_productos(){
            $conectar=parent::conexion();
            parent::set_names();
            $sql=" SELECT COUNT(*) AS total FROM productos WHERE estado='A'";
            $sql=$conectar->prepare($sql);
            $sql->execute();    
            return $resultado=$sql->fetchAll(); 
        }

        public function insertar_pedido($id_categoria,$curso,$descripcion,$fecha_ini,$fecha_fin,$profesor){

            $conectar=parent::Conexion();
            parent::set_names();
            $sql="INSERT INTO cursos (cur_id,id_categoria,curso,descripcion,fecha_ini,fecha_fin,profesor,fecha_crea,estado) 
            VALUES (null,?,?,?,?,?,?,now(),1)";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$id_categoria);
            $sql->bindValue(2,$curso);
            $sql->bindValue(3,$descripcion);
            $sql->bindValue(4,$fecha_ini);
            $sql->bindValue(5,$fecha_fin);
            $sql->bindValue(6,$profesor);
            $sql->execute();
            return $resultado=$sql->fetchAll(); 
        } 

        
    
} 


?>
