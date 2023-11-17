
function eliminar(id){
    funcion="eliminar_usuario";
    swal.fire({
        title:'Eliminar!',
        text: 'Desear eliminar el registro?',   
        icon: 'error',
        showCancelButton: true,
        confirmButtonText: 'Aceptar',
        cancelButtonText: 'Cancelar',
    }).then((result)=>{
        if(result.value){
            $.post("../Controllers/usuarios.admin.php",{funcion,id:id},function (data){
                swal.fire({
                    title: 'Correcto!',
                    text: 'Se elimino Correctamente',
                    icon: 'success',
                    confirmButtonText: 'Aceptar'

                }).then(function(){
                    location.reload();
                  })

                
            });
        }
    });   
  }

  function editar(id){

    funcion = 'obtenerdatos';
    $.post('../Controllers/usuarios.php',{ funcion ,id:id }, (response)=> {
        let usuario = JSON.parse(response);
        $('#user').val(usuario.username);
        $('#pass').val(usuario.pass);
        $('#nombres_mod').val(usuario.nombres);
        $('#apellidos_mod').val(usuario.apellidos);
        $('#email_mod').val(usuario.email);
       
      
     })

    
    $('#modaldatos').modal('show');

    $(document).on('click','.editar_datos',(e)=>{
        e.preventDefault();
        funcion="editardatos";
        id=id;
        let datos = new FormData($('#form-datos')[0]);
        datos.append("funcion",funcion)
        datos.append("id",id)
        
        $.ajax({ 
            type: "POST",
            url: '../Controllers/usuarios.php',
            data: datos,
            cache: false,
            processData: false,
            contentType: false,
            success: function(response){ 
                console.log(response);
                if(response=='success'){ 
                    Swal.fire({
                        position: "top-center",
                        icon: "success",
                        title: "se edito correctamente",
                        showConfirmButton: false,
                        timer: 1500
                      }).then(function(){
                        
                        location.reload();
                        
                      })
                    
    
                }else{ 
                    toastr.error(' Hubo un conflicto al editar sus datos');
                }
                
            }
        })
    }
    );

}

        