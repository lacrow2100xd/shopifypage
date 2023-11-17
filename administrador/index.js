$(document).ready(function () {
  var funcion;

  verificar_sesion();

  function verificar_sesion() {
    funcion = "verificar_sesion";
    $.post("../Controllers/usuarios.php", { funcion }, (response) => {
      console.log(response);
      if (response != "") {
        let sesion = JSON.parse(response);
        $("#nav-login").hide();
        $("#nav-iniciar-sesion").hide();
        $("#usuario_nav").text(sesion.user);

        $("#avatar_nav").attr("src", "../Util/Img/users/" + sesion.avatar);
      } else {
        $("#nav_usuario").hide();
        $("#nav-carrito").hide();
      }
    });
  }

  $(document).ready(function () {
    $.post("../Controllers/administrador.index.php?opc=total", function (data) {
      data = JSON.parse(data);
      console.log(data);
      $("#totalproductos").html(data.total);
    });
  });

  $(document).ready(function () {
    $.post(
      "../Controllers/administrador.index.php?opc=contarVehiculos",
      function (data) {
        data = JSON.parse(data);
        console.log(data);
        $("#1").html(data.contarVehiculos);
      }
    );
  });

  $(document).ready(function () {
    $.post(
      "../Controllers/administrador.index.php?opc=contarTecnologia",
      function (data) {
        data = JSON.parse(data);
        console.log(data);
        $("#2").html(data.contarTecnologia);
      }
    );
  });

  $(document).ready(function () {
    $.post(
      "../Controllers/administrador.index.php?opc=contarElectrodomesticos",
      function (data) {
        data = JSON.parse(data);
        console.log(data);
        $("#3").html(data.contarElectrodomesticos);
      }
    );
  });
  $(document).ready(function () {
    $.post(
      "../Controllers/administrador.index.php?opc=contHogar",
      function (data) {
        data = JSON.parse(data);
        console.log(data);
        $("#4").html(data.contHogar);
      }
    );
  });
  $(document).ready(function () {
    $.post(
      "../Controllers/administrador.index.php?opc=contdeporte",
      function (data) {
        data = JSON.parse(data);
        console.log(data);
        $("#5").html(data.contdeporte);
      }
    );
  });
  $(document).ready(function () {
    $.post(
      "../Controllers/administrador.index.php?opc=contbelleza",
      function (data) {
        data = JSON.parse(data);
        console.log(data);
        $("#6").html(data.contbelleza);
      }
    );
  });
  $(document).ready(function () {
    $.post(
      "../Controllers/administrador.index.php?opc=contHerramientas",
      function (data) {
        data = JSON.parse(data);
        console.log(data);
        $("#7").html(data.contHerramientas);
      }
    );
  });
  $(document).ready(function () {
    $.post(
      "../Controllers/administrador.index.php?opc=contConstruccion",
      function (data) {
        data = JSON.parse(data);
        console.log(data);
        $("#8").html(data.contConstruccion);
      }
    );
  });
  $(document).ready(function () {
    $.post(
      "../Controllers/administrador.index.php?opc=contInmuebles",
      function (data) {
        data = JSON.parse(data);
        console.log(data);
        $("#9").html(data.contInmuebles);
      }
    );
  });
  $(document).ready(function () {
    $.post(
      "../Controllers/administrador.index.php?opc=contConsolas",
      function (data) {
        data = JSON.parse(data);
        console.log(data);
        $("#10").html(data.contConsolas);
      }
    );
  });
  $(document).ready(function () {
    $.post(
      "../Controllers/administrador.index.php?opc=contModa",
      function (data) {
        data = JSON.parse(data);
        console.log(data);
        $("#11").html(data.contModa);
      }
    );
  });
  $(document).ready(function () {
    $.post(
      "../Controllers/administrador.index.php?opc=contJuegos",
      function (data) {
        data = JSON.parse(data);
        console.log(data);
        $("#12").html(data.contJuegos);
      }
    );
  });
});
