<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Iniciar sesión: Shopify</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../Util/Css/Css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../Util/Css/adminlte.min.css">

  <link rel="stylesheet" href="../Util/Css/estilos.login.css">
  
  <link rel="icon" href="../Util/Img/logotipo.png"> 

  <link rel="stylesheet" href="../Util/Css/toastr.min.css">
 
 

  
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <img src="../Util/Img/logo.png" width="140" height="44" ></img>
    <a href="../index.php"><b></b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
  
    <div class="card-body login-card-body">
      <div>
      <h3 class="login-box-msg">Iniciar sesión</h3>
      </div>
      <div class="msj-continuar">
        <p>Continúa a Shopify</p>
      </div>
      <form id="form-login">
        <div class="input-group mb-3">
 
          <input id="user" type="text" class="form-control" placeholder="Usuario" required >
          <div class="input-group-append">
            <div class="input-group-text">
              <img src="../Util/Img/email.svg" width="22" height="22"></img>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input id="pass" type="password" class="form-control" placeholder="Contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <img src="../Util/Img/padlock.svg" width="22" height="22"></img>
            </div>
          </div>
        </div>
        <div class="social-auth-links text-center mb-3">
        
        <button type="submit" href="#" class="btn btn-block btn-primary estilos-botton">
           Iniciar sesión
        </button>
       
      </div>
        
      </form>

      <div class="social-auth-links text-center mb-3">
        <a class="separador">o</a>
        <button type="submit" class="estilos-continuar"><img src="../Util/Img/facebook.svg" width="25" height="25"></img> Continuar con Facebook </button>
        <button type="submit" class="estilos-continuar2"><img src="../Util/Img/apple-logo.svg" width="20" height="20"></img> Continuar con Apple </button>
        <button type="submit" class="estilos-continuar3"><img src="../Util/Img/google.png" width="18" height="18"></img> Continuar con Google </button>
        
      </div>
  
      <!-- /.social-auth-links -->

      <p class="mb-0">
        <a>¿Eres nuevo/a en shopify? </a>&nbsp;<a href="registro.php" class="text-center">Registrarse</a>
      </p>
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

<script src="login.js"></script>

<script src="../Util/js/toastr.min.js"></script>
</body>
</html>
