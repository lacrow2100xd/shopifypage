$(document).ready(function () {
  var funcion;

  verificar_sesion();

  function verificar_sesion() {
    funcion = "verificar_sesion";
    $.post("../Controllers/usuarios.php", { funcion }, (response) => {
      if (response != "") {
        location.href = "../index.php";
      }
    });
  }

  $.validator.setDefaults({
    submitHandler: function () {
      let username = $("#username").val();
      let pass = $("#pass").val();
      let nombres = $("#nombres").val();
      let apellidos = $("#apellidos").val();
      let cedula = $("#cedula").val();
      let email = $("#email").val();
      let telefono = $("#telefono").val();
      funcion = "registrar_usuario";
      $.post(
        "../Controllers/usuarios.php",
        {
          username,
          pass,
          nombres,
          apellidos,
          cedula,
          email,
          telefono,
          funcion,
        },
        (response) => {
          response = response.trim();
          if (response == "success") {
            Swal.fire({
              title: "Correcto!",
              text: "Se Registro Correctamente",
              icon: "success",
              confirmButtonText: "Aceptar",
            }).then(function () {
              $("#form-register").trigger("reset");
              location.href = "../Views/login.php";
            });
          } else {
            swal.fire({
              title: "¡error!",
              text: "Error",
              icon: "Hubo un conflicto al registrarse, comuniquese con el area de sistemas",
              confirmButtonText: "Aceptar",
            });
          }
        }
      );
    },
  });

  jQuery.validator.addMethod(
    "usuario_existente",
    function (value, element) {
      let funcion = "verificar_usuario";
      let bandera;
      $.ajax({
        type: "POST",
        url: "../Controllers/usuarios.php ",
        data: "funcion=" + funcion + "&&value=" + value,
        async: false,
        success: function (response) {
          if (response == "success") {
            bandera = false;
          } else {
            bandera = true;
          }
        },
      });
      console.log(bandera);
      return bandera;
    },
    "El usuario ya existe, por favor ingrese uno diferente"
  );

  jQuery.validator.addMethod(
    "letras",
    function (value, element) {
      return /^[A-Za-z    ]+$/.test(value);
    },
    "Este campo solo permite letras"
  );

  $("#form-register").validate({
    rules: {
      username: {
        required: true,
        minlength: 6,
        maxlength: 10,
        usuario_existente: true,
      },
      pass: {
        required: true,
        minlength: 8,
        maxlength: 20,
      },
      pass_repeat: {
        required: true,
        equalTo: "#pass",
      },
      nombres: {
        required: true,
        letras: true,
      },
      apellidos: {
        required: true,
        letras: true,
      },
      cedula: {
        required: true,
        digits: true,
        minlength: 8,
        maxlength: 10,
      },
      telefono: {
        required: true,
        digits: true,
        minlength: 10,
        maxlength: 10,
      },
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5,
      },
      terms: {
        required: true,
      },
    },
    messages: {
      username: {
        required: "Este campo es obligatorio",
        minlength: "El usuario debe ser de minimo 6 caracteres",
        maxlength: "El usuario debe ser de maximo 10   caracteres",
      },
      pass: {
        required: "Este campo es obligatorio",
        minlength: "La contraseña debe ser de minimo 8 caracteres",
        maxlength: "La contraseña debe ser de maximo 20 caracteres",
      },
      pass_repeat: {
        required: "Este campo es obligatorio",
        equalTo: "La contraseña no coincide",
      },
      nombres: {
        required: "Este campo es obligatorio",
      },
      apellidos: {
        required: "Este campo es obligatorio",
      },
      cedula: {
        required: "Este campo es obligatorio",
        minlength: "El documento debe ser de minimo 8 caracteres",
        maxlength: "El documento debe ser de maximo 10 caracteres",
        digits: "La cedula solo esta compuesto por numeros",
      },
      email: {
        required: "Este campo es obligatorio",
        email: "No es formato correo",
      },
      telefono: {
        required: "Este campo es obligatorio",
        minlength: "El numero debe ser de minimo 10 caracteres",
        maxlength: "El numero debe ser de maximo 10 caracteres",
        digits: "El numero solo esta compuesto   por numeros",
      },

      terms: "Please accept our terms",
    },
    errorElement: "span",
    errorPlacement: function (error, element) {
      error.addClass("invalid-feedback");
      element.closest(".form-group").append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass("is-invalid");
      $(element).removeClass("is-valid");
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass("is-invalid");
      $(element).addClass("is-valid");
    },
  });
});
