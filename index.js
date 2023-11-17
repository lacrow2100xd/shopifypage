$(document).ready(function() {

    var funcion;

    verificar_sesion();
    
    
    function verificar_sesion(){
        funcion = 'verificar_sesion';
        $.post('Controllers/usuarios.php',{ funcion }, (response)=> {
            console.log(response);
            if(response !=''){
               let sesion=JSON.parse(response);
               $('#nav-login').hide();
               $('#nav-iniciar-sesion').hide();
               $('#usuario_nav').text(sesion.user);
               
               $('#avatar_nav').attr('src','Util/Img/users/'+ sesion.avatar);
               
               
            }else{
                $('#nav_usuario').hide();
                $('#nav-carrito').hide();

            }         

        })
    }

    document.addEventListener('keyup',e=>  {
        var keycode = e.keyCode || e.which;
        if(keycode=='13'){

            location.href = ('../pagina/Views/productos.php');    
            
        }
    })

   
    

})