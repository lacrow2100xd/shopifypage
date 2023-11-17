<?php
include_once('../Models/usuario.php');
$usuario = new Usuario();
session_start();
if($_POST['funcion']=='login'){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $usuario->loguearse($user,$pass);
    if($usuario->objetos!=null){
        foreach($usuario->objetos as $objeto){
            $_SESSION['id']=$objeto->id;
            $_SESSION['user']=$objeto->user;
            $_SESSION['nombres']=$objeto->nombres;
            $_SESSION['apellidos']=$objeto->apellidos;
            $_SESSION['email']=$objeto->email;
            $_SESSION['telefono']=$objeto->telefono;    
            $_SESSION['tipo_usuario']=$objeto->id_tipo;
            $_SESSION['avatar']=$objeto->avatar;
        }
        echo 'logueado';
    } 
}
if($_POST['funcion']=='verificar_sesion'){    
    if(!empty($_SESSION['id'])){
        $json[]=array(
            'id'=>$_SESSION['id'],
            'user'=>$_SESSION['user'],
            'nombres'=>$_SESSION['nombres'],
            'apellidos'=>$_SESSION['apellidos'],
            'email'=>$_SESSION['email'],
            'telefono'=>$_SESSION['telefono'],
            'tipo_usuario'=>$_SESSION['tipo_usuario'],
            'avatar'=>$_SESSION['avatar']
        );
        $jsonstring = json_encode($json[0]);
        echo $jsonstring;     
    }else{
        echo '';
    }
}
if($_POST['funcion']=='verificar_usuario'){
    $username = $_POST['value'];
    $usuario->verificar_usuario($username);
    if($usuario->objetos!=null){
        echo 'success';
    }
 
}
if($_POST['funcion']=='registrar_usuario'){
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $cedula = $_POST['cedula'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $usuario->registrar_usuario($username,$pass,$nombres,$apellidos,$cedula,$email,$telefono);
    echo 'success';
  
 
}
if($_POST['funcion']=='obtener_datos'){
   $usuario->obtener_datos($_SESSION['id']);
   foreach($usuario->objetos as $objetos){
        $json[]=array(
            'username'=>$objetos->user,
            'nombres'=>$objetos->nombres,
            'apellidos'=>$objetos->apellidos,
            'cedula'=>$objetos->cedula,
            'email'=>$objetos->email,
            'telefono'=>$objetos->telefono,
            'avatar'=>$objetos->avatar,
            'tipo_usuario'=>$objetos->tipo,     
        );
    }
    $jsonstring = json_encode($json[0]);
    echo $jsonstring;
}

if($_POST['funcion']=='obtenerdatos'){
    $usuario->obtener_datos($_POST['id']);
    foreach($usuario->objetos as $objetos){
         $json[]=array(
             'username'=>$objetos->user,
             'pass'=>$objetos->pass,
             'nombres'=>$objetos->nombres,
             'apellidos'=>$objetos->apellidos,
             'cedula'=>$objetos->cedula,
             'email'=>$objetos->email,
             'telefono'=>$objetos->telefono,
             'avatar'=>$objetos->avatar,
             'tipo_usuario'=>$objetos->tipo,     
         );
     }
     $jsonstring = json_encode($json[0]);
     echo $jsonstring;
 }



if($_POST['funcion']=='editar_datos'){
    $id_usuario = $_SESSION['id'];
    $nombres = $_POST['nombres_mod'];
    $apellidos = $_POST['apellidos_mod'];
    $cedula = $_POST['cedula_mod'];
    $email = $_POST['email_mod'];
    $telefono = $_POST['telefono_mod'];
    $avatar = $_FILES['avatar_mod']['name'];
    if($avatar!=''){
        $nombre = uniqid().'-'.$avatar;
        $ruta = '../Util/Img/users/' .$nombre;
        move_uploaded_file($_FILES['avatar_mod']['tmp_name'],$ruta);
        $usuario->obtener_datos($id_usuario);
        foreach($usuario->objetos as $objeto){
            $avatar_actual=$objeto->avatar;
            if($avatar_actual!='default.png'){
                unlink('../Util/Img/users/'.$avatar_actual);

            }
        }
        $_SESSION['avatar']=$nombre;
    }else {
        $nombre ='';
    }
    $usuario->editar_datos($id_usuario,$nombres,$apellidos,$cedula,$email,$telefono,$nombre);
    echo 'success';
}


if($_POST['funcion']=='editardatos'){
    $id_usuario = $_POST['id'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $nombres = $_POST['nombres_mod'];
    $apellidos = $_POST['apellidos_mod'];
    $email = $_POST['email_mod'];
    $avatar = $_FILES['avatar_mod']['name'];
    if($avatar!=''){
        $nombre = uniqid().'-'.$avatar;
        $ruta = '../Util/Img/users/' .$nombre;
        move_uploaded_file($_FILES['avatar_mod']['tmp_name'],$ruta);
        $usuario->obtener_datos($id_usuario);
        foreach($usuario->objetos as $objeto){
            $avatar_actual=$objeto->avatar;
            if($avatar_actual!='default.png'){
                unlink('../Util/Img/users/'.$avatar_actual);

            }
        }
        $_SESSION['avatar']=$nombre;
    }else {
        $nombre ='';
    }
    $usuario->editardatos($id_usuario,$user,$pass,$nombres,$apellidos,$email,$nombre);
    echo 'success';
}

?>
