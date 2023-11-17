<?php


class Productos extends Conectar
{


    public function total_productos()
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = " SELECT COUNT(*) AS total FROM productos WHERE estado='A'";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function insertar_pedido($id_categoria, $curso, $descripcion, $fecha_ini, $fecha_fin, $profesor)
    {

        $conectar = parent::Conexion();
        parent::set_names();
        $sql = "INSERT INTO cursos (cur_id,id_categoria,curso,descripcion,fecha_ini,fecha_fin,profesor,fecha_crea,estado) 
            VALUES (null,?,?,?,?,?,?,now(),1)";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $id_categoria);
        $sql->bindValue(2, $curso);
        $sql->bindValue(3, $descripcion);
        $sql->bindValue(4, $fecha_ini);
        $sql->bindValue(5, $fecha_fin);
        $sql->bindValue(6, $profesor);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function contarVehiculos()
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = " SELECT COUNT(*) AS contarVehiculos FROM productos WHERE id_categoria = 1; AND estado='A'";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function contarTecnologia()
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = " SELECT COUNT(*) AS contarTecnologia FROM productos WHERE id_categoria = 2; AND estado='A'";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function contarElectrodomesticos()
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = " SELECT COUNT(*) AS contarElectrodomesticos FROM productos WHERE id_categoria = 3; AND estado='A'";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
    public function contHogar()
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = " SELECT COUNT(*) AS contHogar FROM productos WHERE id_categoria = 4; AND estado='A'";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
    public function contdeporte()
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = " SELECT COUNT(*) AS contdeporte FROM productos WHERE id_categoria = 5; AND estado='A'";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
    public function contbelleza()
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = " SELECT COUNT(*) AS contbelleza FROM productos WHERE id_categoria = 6; AND estado='A'";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
    public function contHerramientas()
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = " SELECT COUNT(*) AS contHerramientas FROM productos WHERE id_categoria = 7; AND estado='A'";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
    public function contConstruccion()
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = " SELECT COUNT(*) AS contConstruccion FROM productos WHERE id_categoria = 8; AND estado='A'";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
    public function contInmuebles()
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = " SELECT COUNT(*) AS contInmuebles FROM productos WHERE id_categoria = 9; AND estado='A'";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
    public function contConsolas()
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = " SELECT COUNT(*) AS contConsolas FROM productos WHERE id_categoria = 10; AND estado='A'";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
    public function contModa()
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = " SELECT COUNT(*) AS contModa FROM productos WHERE id_categoria = 11; AND estado='A'";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
    public function contJuegos()
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = " SELECT COUNT(*) AS contJuegos FROM productos WHERE id_categoria = 12; AND estado='A'";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }



}


?>