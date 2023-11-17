<?php

include_once('Conexion.php');

class Usuario{
    var $objetos;

    
    public function __construct(){
        $db = new Conexion();
        $this->acceso = $db->pdo;
    }
    function loguearse($user,$pass){
        $sql="SELECT * from usuarios
                WHERE user=:user and pass=:pass"; 
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':user'=>$user,':pass'=>$pass));
        $this->objetos = $query->fetchAll();
        return $this->objetos;
    }

    function verificar_usuario($user){
        $sql="SELECT * from usuarios 
                WHERE user=:user"; 
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':user'=>$user));
        $this->objetos = $query->fetchAll();
        return $this->objetos;
    }

    function registrar_usuario($username,$pass,$nombres,$apellidos,$cedula,$email,$telefono){
        $sql="INSERT INTO usuarios (user,pass,nombres,apellidos,cedula,email,telefono,id_tipo) 
            VALUES(:user,:pass,:nombres,:apellidos,:cedula,:email,:telefono,:id_tipo)";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':user'=>$username,':pass'=>$pass,':nombres'=>$nombres,':apellidos'=>$apellidos,':cedula'=>$cedula,':email'=>$email,':telefono'=>$telefono,':id_tipo'=>2));
        
    }
    function obtener_datos($user){
        $sql="SELECT * FROM usuarios JOIN tipo_usuario ON usuarios.id_tipo = tipo_usuario.id_tipo
                WHERE usuarios.id=:user";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':user'=>$user));
        $this->objetos = $query->fetchAll();
        return $this->objetos;
    }

    
    function editar_datos($id_usuario,$nombres,$apellidos,$cedula,$email,$telefono,$nombre){
        if($nombre!=''){
            $sql="UPDATE usuarios SET nombres=:nombres,
            apellidos=:apellidos,
            cedula=:cedula,
            email=:email,
            telefono=:telefono,
            avatar=:avatar
            WHERE   id=:id_usuario";
                $query = $this->acceso->prepare($sql);
                $variables = array(
                ':id_usuario'=>$id_usuario,
                ':nombres'=>$nombres,
                ':apellidos'=>$apellidos,
                ':cedula'=>$cedula,
                ':email'=>$email,
                ':telefono'=>$telefono,
                ':avatar'=>$nombre
            );  
        $query->execute($variables);
        }else{
            $sql="UPDATE usuarios SET nombres=:nombres,
                                  apellidos=:apellidos,
                                  cedula=:cedula,
                                  email=:email,
                                  telefono=:telefono
                WHERE   id=:id_usuario";
            $query = $this->acceso->prepare($sql);
            $variables = array(
            ':id_usuario'=>$id_usuario,
            ':nombres'=>$nombres,
            ':apellidos'=>$apellidos,
            ':cedula'=>$cedula,
            ':email'=>$email,
            ':telefono'=>$telefono
            );  
            $query->execute($variables);
        }
    
    }

    function editardatos($id_usuario,$user,$pass,$nombres,$apellidos,$email,$nombre){
        if($nombre!=''){
            $sql="UPDATE usuarios SET 
            user=:user,
            pass=:pass,
            nombres=:nombres,
            apellidos=:apellidos,
            email=:email,
            avatar=:avatar
            WHERE   id=:id_usuario";
                $query = $this->acceso->prepare($sql);
                $variables = array(

                ':id_usuario'=>$id_usuario,
                ':user'=>$user,
                ':pass'=>$pass,
                ':nombres'=>$nombres,
                ':apellidos'=>$apellidos,
                ':email'=>$email,
                ':avatar'=>$nombre
            );  
        $query->execute($variables);
        }else{
            $sql="UPDATE usuarios SET  user=:user,
                                  pass=:pass,
                                  nombres=:nombres,
                                  apellidos=:apellidos,
                                  email=:email
                WHERE   id=:id_usuario";
            $query = $this->acceso->prepare($sql);
            $variables = array(
            ':id_usuario'=>$id_usuario,
            ':user'=>$user,
            ':pass'=>$pass,
            ':nombres'=>$nombres,
            ':apellidos'=>$apellidos,
            ':email'=>$email,
            
            );  
            $query->execute($variables);
        }

    }

}


?>