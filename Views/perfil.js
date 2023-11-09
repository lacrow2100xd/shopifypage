$(document).ready(function() {
  
  $(function(){
  bsCustomFileInput.init();
});

    var funcion;
    verificar_sesion();
    obtener_datos();
    llenar_departamentos();
    llenar_direcciones();
    $('#departamento').select2({
        placeholder: 'Seleccione un departamento',
        language:{
            noResults: function() {
                return "No hay resultados";
            },
            searching: function() {
                return "Buscando... ";
            }
        }        
    });
    $('#municipios').select2({
        placeholder: 'Seleccione un municipio',
        language:{
            noResults: function() {
                return "No hay resultados";
            },
            searching: function() {
                return "Buscando... ";
            }
        }        
    });



    function llenar_direcciones(){
        funcion="llenar_direcciones";
        $.post('../Controllers/usuario.municipio.php', { funcion } , (response)=>{
            
            let direcciones=JSON.parse(response);
            let contador=0;
            let template = '';
            direcciones.forEach(direccion =>{   
                contador++;     
                template+=`
                <div class=callout callout-info>
                   <div class="card-header">
                        <strong>direccion ${contador}</strong>
                        <div class="card-tools"> 
                            <button dir_id=" ${direccion.id}" type="button" class="eliminar_direccion btn btn-tool">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                   </div>
                   <div class="card-body">
                        <h2 class="lead"><b> ${direccion.direccion}</b></h2>
                        <p class="text-muted text-sm"><b>Referencia:</b> ${direccion.referencia}</p>
                        <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> 
                            ${direccion.municipio}, ${direccion.departamento}
                     </li>
                     </ul>
                   </div>
                </div>               
                `;
            });
            $('#direcciones').html(template);
    
        })     
    }
    $(document).on('click','.eliminar_direccion',(e)=>{
       let elemento = $(this)[0].activeElement;
       let id = $(elemento).attr('dir_id');
       const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success m-3',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
      })
      swalWithBootstrapButtons.fire({
        title: '¿Desea borrar esta direccion?',
        text: "Esta accion puede traer consecuencias",
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText: 'No, ¡deseo cancelar!',
        confirmButtonText: 'Si,¡borra esto!',
        reverseButtons: true
      }).then((result) => {
        if (result.isConfirmed) {
            funcion="eliminar_direccion";
            $.post('../Controllers/usuario.municipio.php', { funcion, id} , (response)=>{
                
                if(response=="success"){
                    swalWithBootstrapButtons.fire(
                        '¡Borrado!',
                        'La direccion fue borrada',
                        'success'
                      )
                      llenar_direcciones();
                    
                }
                else if(response=="error"){
                    swalWithBootstrapButtons.fire(
                        'No se borro!',
                        'Hubo alteracion en la integridad de datos',
                        'error'
                      )
                }
                else{
                    swalWithBootstrapButtons.fire(
                        'No se ha borrado!',
                        'Tenemos problemas en el sistema',
                        'error'
                      )
                }
 
            })
          
        } else if (result.dismiss === Swal.DismissReason.cancel) {
          swalWithBootstrapButtons.fire(
            'Cancelado',
            'La direccion no se borro',
            'error'
          )
        }
      })
    })
    
    function llenar_departamentos(){
        funcion="llenar_departamentos";
        $.post('../Controllers/departamento.controller.php', { funcion } , (response)=>{
            let departamentos=JSON.parse(response);
            let template='';
            departamentos.forEach(departamento => {
            
                template+=`
                <option value="${departamento.id}">${departamento.nombre}</option>   
                `;
            });
            $('#departamento').html(template);
            $('#departamento').val('').trigger('change');
        })
       
    }
    $('#departamento').change(function(){
        let departamento_id= $('#departamento').val();
        funcion="llenar_municipios";
        $.post('../Controllers/municipios.controller.php', { funcion, departamento_id } , (response)=>{
            let municipios=JSON.parse(response);
            let template='';
            municipios.forEach(municipios=> {
                template+=`
                <option value="${municipios.id}">${municipios.nombre}</option>   
                `;
            });
            $('#municipios').html(template);
        })

    })

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

     

    function obtener_datos(){
         funcion = 'obtener_datos';
        $.post('../Controllers/usuarios.php',{ funcion }, (response)=> {
            let usuario = JSON.parse(response);
            $('#username').text(usuario.username);
            $('#tipo_usuario').text(usuario.tipo_usuario);
            $('#nombres').text(usuario.nombres+' '+usuario.apellidos);
            $('#avatar_perfil').attr('src','../Util/Img/users/'+ usuario.avatar);
            $('#cedula').text(usuario.cedula);
            $('#email').text(usuario.email);
            $('#telefono').text(usuario.telefono);
          
         })
    }

    $('#form-direccion').submit(e =>{
        funcion = 'crear_direccion';
        let id_municipio=$('#municipios').val();
        let direccion=$('#direccion').val();
        let referencia=$('#referencia').val();
        e.preventDefault();
       
        $.post('../Controllers/usuario.municipio.php',  {id_municipio, direccion, referencia, funcion},
        (response)=>{
            if(response=='success'){
                Swal.fire({
                    title: 'Correcto!',
                    text: 'Se Registro Correctamente',
                    icon: 'success',
                    confirmButtonText: 'Aceptar'
                }).then(function(){
                    $('#form-direccion').trigger('reset');
                    $('#departamento').val('').trigger('change');
                    
                  })

            }else {
                swal.fire({
                    title: '¡error!',
                    text: 'Error',
                    icon: 'Hubo un conflicto al registrarse, comuniquese con el area de sistemas',
                    confirmButtonText: 'Aceptar'
      
                  })
            }
        })
        e.preventDefault();
    })
    $(document).on('click','.editar_datos',(e)=>{
        funcion="obtener_datos";
        $.post('../Controllers/usuarios.php', {funcion}, response=>{ 
            let usuario = JSON.parse(response);
            $('#nombres_mod').val(usuario.nombres);
            $('#apellidos_mod').val(usuario.apellidos);
            $('#cedula_mod').val(usuario.cedula);
            $('#email_mod').val(usuario.email);
            $('#telefono_mod').val(usuario.telefono);
        })
    })

    $.validator.setDefaults({
        submitHandler: function () {
            funcion="editar_datos";
            let datos = new FormData($('#form-datos')[0]);
            datos.append("funcion",funcion)
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
                        toastr.success('Se han editado sus datos');
                        verificar_sesion();
                        obtener_datos();
                    }else{ 
                        toastr.error(' Hubo un conflicto al editar sus datos');
                    }
                    
                }
            })
        }
      });

    jQuery.validator.addMethod("letras",
    function(value,element) {
        return /^[A-Za-z    ]+$/.test(value); 
    }
    ,"Este campo solo permite letras");

    $('#form-datos').validate({
      rules: {   
        nombres_mod: {
          required: true,
          letras: true
        },
        apellidos_mod: {
          required: true,
          letras: true
        },
        cedula_mod: {
          required: true,
          digits: true,
          minlength: 8,
          maxlength: 10,
        }, 
        email_mod: {
            required: true,
            email: true,
          },
        telefono_mod: {
          required: true,
          digits: true,
          minlength: 10,
          maxlength: 10,
        }
        
      },
      messages: {
        nombres_mod: {
          required: "Este campo es obligatorio",
        },
        apellidos_mod: {
          required: "Este campo es obligatorio",
        },
        cedula_mod: {
          required: "Este campo es obligatorio",
          minlength: "El documento debe ser de minimo 8 caracteres",
          maxlength: "El documento debe ser de maximo 10 caracteres",
          digits: "La cedula solo esta compuesto por numeros"
        },
        email_mod: {
          required: "Este campo es obligatorio",
          email: "No es formato correo"
        },
        telefono_mod: {
          required: "Este campo es obligatorio",
          minlength: "El numero debe ser de minimo 10 caracteres",
          maxlength: "El numero debe ser de maximo 10 caracteres",
          digits: "El numero solo esta compuesto por numeros"
        }
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

})