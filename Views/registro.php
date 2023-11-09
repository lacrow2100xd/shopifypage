<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registrate: Shopify</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../Util/Css/Css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../Util/Css/adminlte.min.css">

  <link rel="stylesheet" href="../Util/Css/estilos.login.css">
  
  <link rel="icon" href="../Util/Img/logotipo.png"> 

  <link rel="stylesheet"  href="../Util/Css/sweetalert2.min.css">

  <link rel="stylesheet" href="../Util/Css/toastr.min.css">
 
 

  
</head>
<div class="modal fade" id="terminos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="card card-primary"> 
        <div class="card-header">
          <h1 class="card-title" id="exampleModalLabel">Terminos y condiciones</h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="card-body ">
          <h6><b>1. Account Terms</b></h6>
          <p>To access and use the Services, you must register for a Shopify account (“Account”). To complete your Account registration, you must provide us with your full legal name, business address, phone number, a valid email address, and any other information indicated as required. Shopify may reject your application for an Account, or cancel an existing Account, for any reason, at our sole discretion.</p>
          <h6><b>2. Account Activation</b></h6>
          <p>If you are signing up for the Services on behalf of your employer, your employer will be the Store Owner. If you are signing up for the Services on behalf of your employer, then you must use your employer-issued email address and you represent and warrant that you have the authority to bind your employer to our Terms of Service.</p>
          <h6><b>3. Shopify Rights</b></h6>
          <p>Shopify does not pre-screen Materials and it is in our sole discretion to refuse or remove any Materials from any part of the Services, including if we determine in our sole discretion that the goods or services that you offer through the Services, or the Materials uploaded or posted to the Services, violate our AUP or these Terms of Service.</p>
          <h6><b>4. Your Responsibilities</b></h6>
          <p>You acknowledge and agree to provide public-facing contact information, a refund policy and order fulfilment timelines on your Shopify Store.</p>

        </div>
        <div class="card-footer">
          <button type="button" class="btn btn-success btn-block" data-dismiss="modal">Cerrar</button>
          
        </div>

      </div>
    </div>
  </div>
</div>
<body class="hold-transition login-page">
<div class="login-box-registro">
  <div class="login-logo">
    <img src="../Util/Img/logo.png" width="140" height="44" ></img>
    <a href="../index.php"><b></b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card2">
  
    <div class="card-body login-card-body">
      <div class="login-box-registro">
      <h3 class="login-box-msg2">Registro</h3>
      </div>
      <div class="msj-continuar">
        <p>Para crear tu cuenta te pediremos algunos datos</p>
      </div>
      <div> 
  
      <form id="form-register">
        <div class="row">
          <div class="col-sm-12 ">
            <div class="form-group">
                <label for="username">Nombre de usuario</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="Ingrese nombre de usuario">
            </div>

          </div>
          <div class="col-sm-6">
            <div class="form-group">
                <label for="pass">Contraseña</label>
                <input type="password" name="pass" class="form-control" id="pass" placeholder="Ingrese contraseña">
            </div>
            <div class="form-group">
                <label for="nombres">Nombre</label>
                <input type="text" name="nombres" class="form-control" id="nombres" placeholder="Ingrese nombre">
            </div>
            <div class="form-group">
                <label for="cedula">Cedula</label>
                <input type="text" name="cedula" class="form-control" id="cedula" placeholder="Ingrese identificacion">
            </div>
            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Ingrese telefono">
            </div>

          </div>
          <div class="col-sm-6">
            <div class="form-group">
                <label for="pass_repeat">Repetir contraseña</label>
                <input type="password" name="pass_repeat" class="form-control" id="pass_repeat" placeholder="Ingrese de nuevo contraseña">
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" class="form-control" id="apellidos" placeholder="Ingrese apellidos">
            </div>
            <div class="form-group">
                <label for="email">Correo</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="Ingrese correo">
            </div>
            

          </div>
          <div class="col-sm-12">
            <div class="form-group mb-0">
              <div class="custom-control custom-checkbox">
                 <input type="checkbox" name="terms" class="custom-control-input" id="terms">
                 <label class="custom-control-label" for="terms">Estoy de acuerdo con los <a href="#" data-toggle="modal" data-target="#terminos">terminos de servicio</a>.</label>
              </div>
            </div>
          </div>
          
        </div>
  
        
                <!-- /.card-body -->
                <div class="card-footer text-center">
                  <button type="submit" class="btn btn-primary  estilos-iniciar-sesion">Registrarme</button>
                </div>                
        
      </form>
      <!-- /.social-auth-links -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<script src="../Util/js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../Util/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../Util/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../Util/js/demo.js"></script>


<script src="../Util/js/toastr.min.js"></script>

<script src="../Util//js/jquery.validate.min.js"></script>
<script src="../Util/js/additional-methods.min.js"></script>
<script src="registro.js"></script>
<script src="../Util/js/sweetalert2.min.js"></script>
</body>
</html>


