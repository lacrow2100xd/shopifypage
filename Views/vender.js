function mostrar(){
  document.getElementById('vendercard').style.display = 'block';
  document.getElementById('escondercategoria').style.display = 'none';
}




$(document).ready(function() {

    $(function(){
        bsCustomFileInput.init();
    });

    var funcion;

    verificar_sesion();


    function verificar_sesion(){
        funcion = 'verificar_sesion';
        $.post('../Controllers/usuarios.php',{ funcion }, (response)=> {
            console.log(response);
            if(response !=''){
               let sesion=JSON.parse(response);
               $('#nav-login').hide();
               $('#nav-iniciar-sesion').hide();
               $('#usuario_nav').text(sesion.user);
               
               $('#avatar_nav').attr('src','../Util/Img/users/'+ sesion.avatar);
               
               
            }else{
                $('#nav_usuario').hide();
                $('#nav-carrito').hide();
                location.href= 'login.php';

            }
       
        })
    }
  
    var categoriaLista =document.querySelectorAll('.botton')
    for(var i=0;i<categoriaLista.length;i++)
    {
      categoriaLista[i].addEventListener("click", function()
        {
            id_categoria=this.id
            console.log(id_categoria)

            $.validator.setDefaults({
              submitHandler: function () {
                  
                  funcion="insert_producto";
                  let datos = new FormData($('#form-vender')[0]);
                  datos.append("funcion",funcion)
                  datos.append("id_categoria",id_categoria)
                  $.ajax({ 
                      type: "POST",
                      url: '../Controllers/vender.php',
                      data: datos,
                      cache: false,
                      processData: false,
                      contentType: false,
                      success: function(response){ 
                          console.log(response);             
                          if(response=='success'){ 
                             
                              swal.fire({
                              title: 'Correcto!',
                              text: 'Se publico tu producto correctamente',
                              icon: 'Success',
                              confirmButtonText: 'Aceptar'
          
                              }).then(function(){
                                $('#form-vender').trigger('reset');
                                  
                                
                              })
                              verificar_sesion();
                              
                          }else{ 
                              toastr.error(' Hubo un conflicto al registrar sus datos');
                          }
                          
                      }
                  })
              }
          });
      
      
          jQuery.validator.addMethod("numeros",
          function(value,element) {
              return /^[1234567890.   ]+$/.test(value); 
          }
          ,"El valor solo permite números ");
      
          $('#form-vender').validate({
            rules: {   
              nombre: {
                required: true,
              },
              valor: {
                required: true,
                numeros: true,
                maxlength: 10,
              },
              existencia: {
                required: true,
                digits: true,
                maxlength: 3,
              },
              imagen: {
                  required: true,
              }
            },
            messages: {
              nombre: {
                required: "Este campo es obligatorio",
           
              },
              valor: {
                required: "Este campo es obligatorio",
                numeros: "El valor solo permite números",
                maxlength: "El valor debe ser de maximo 10 numeros",
              },
              existencia: {
                required: "Este campo es obligatorio",
                digits: "La existencia solo permite números",
                maxlength: "La existencia debe ser de maximo 3 numeros",
              },
              imagen: {
                  required: "Este campo es obligatorio"   
              },
             
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
              error.addClass('invalid-feedback');
              element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
              $(element).addClass('is-invalid');
              $(element).removeClass('is-valid');
        
            },
            unhighlight: function (element, errorClass, validClass) {
              $(element).removeClass('is-invalid');
              $(element).addClass('is-valid');
            }
          });
        }); 
    }
  

    

    
    


    
})