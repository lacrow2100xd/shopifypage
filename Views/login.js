$(document).ready(function() {

    var funcion;

    verificar_sesion();

    function verificar_sesion(){
        funcion = 'verificar_sesion';
        $.post('../Controllers/usuarios.php',{ funcion }, (response)=> {
            if(response !=''){
                location.href = ('../index.php');    
            }
        })
    }


    $('#form-login').submit(e =>{
        funcion = 'login';
        let user=$('#user').val();
        let pass=$('#pass').val();
        e.preventDefault();
       
        $.post('../Controllers/usuarios.php',  {user, pass, funcion},(response)=>{
            if(response == 'logueado'){
                toastr.success('*logueado !');
                location.href=("../index.php")
            } else{
                toastr.error(' Datos incorrectos ');
            }
        })
        e.preventDefault();
    })
})