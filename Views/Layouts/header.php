<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>shopify</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="Util/Css/Css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Util/Css/adminlte.min.css">

  <link rel="stylesheet" href="Util/Css/estilos.nav.css">

  <link rel="stylesheet" href="Util/Css/body-index.css">

  <link rel="stylesheet" href="Util/Css/estilos.footer.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  

  <link rel="icon" href="Util/Img/logotipo.png"> 


  

</head>

<header>
  <div class="container-buscador">
    <img src="Util/Img/logo.png" alt="logo de la empresa" width="130" height="41"><a href="index.php"></a></img>
    <input type="search" name="buscador" id="buscador" placeholder="Buscar..." >
    
    <div class="separador">
      <li class="nav-iniciar-sesion" id="nav-iniciar-sesion"><a href="Views/registro.php" class="nav-link proxima-nova">Crea tu cuenta</a></li>
      <li class="nav-item-dropdown" id="nav-login">
        <a href="Views/login.php" class="nav-link" >Iniciar sesión</a>
      </li>
      
      <div class="container-icon" id="nav-carrito">
        <div class="container-cart-icon">
        <svg
					xmlns="http://www.w3.org/2000/svg"
					fill="none"
					viewBox="0 0 24 24"
					stroke-width="1.5"
					stroke="currentColor"
					class="icon-cart"
				>
					<path
						stroke-linecap="round"
						stroke-linejoin="round"
						d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"
					/>
				</svg>
				<div class="count-products">
					<span id="contador-productos">0</span>
				</div>
        </div>
				

				<div class="container-cart-products hidden-cart">
          <div class="row-product">
          <div class="cart-product">
						<div class="info-cart-product">
                            <span class="cantidad-producto-carrito">#</span>
                            <p class="titulo-producto-carrito">Producto</p>
                            <span class="precio-producto-carrito">Valor</span>
                        </div>
						<svg
							xmlns="http://www.w3.org/2000/svg"
							fill="none"
							viewBox="0 0 24 24"
							stroke-width="1.5"
							stroke="currentColor"
							class="icon-close"
						>
							<path
								stroke-linecap="round"
								stroke-linejoin="round"
								d="M6 18L18 6M6 6l12 12"
							/>
						</svg>
					</div>
          </div>
            <div class="info-cart-registro">
					
              <div class="cart-total">
                <h3>Total:</h3>
                <span class="total-pagar">vacio</span>
              </div>

              <div class="registrarperdido">
                <button type="submit" class="btn btn-outline-success letradelcomprar"><i class="bi bi-bag"></i> comprar</button>
              </div>
            </div>
				</div>
			</div>
      </div>
      <li class="nav-item-dropdown" id="nav_usuario">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img id="avatar_nav" src="" width="30" height="30" class="img-fluid img-circle"> &nbsp;<span id="usuario_nav"></span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="Views/perfil.php"><i class="fas fa-user-cog"></i> Mi perfil</a>
          <a class="dropdown-item" href="#"><i class="fas fa-shopping-basket"></i> Mis pedidos </a>
          <a class="dropdown-item" href="Controllers/logout.php"><i class="fas fa-user-times"></i> Cerrar sesion</a>
        </div>
      </li>
    </div>
  
</div>
<div class="container-categorias">
  <div class="menu-horizontal">
    <li><a href="" class="margen">Categorias<img src="Util/Img/assets/down.svg" class="arrow"></img></a>
        <ul class="menu-vertical">
          <li class="proxima-nova"><a href="">Vehiculos</a></li>
          <li class="proxima-nova"><a href="">Tecnologia</a></li>
          <li class="proxima-nova"><a href="">Electrodomesticos</a></li>
          <li class="proxima-nova"><a href="">Hogar y muebles</a></li>
          <li class="proxima-nova"><a href="">Deportes y fitness</a></li>
          <li class="proxima-nova"><a href="">Belleza y cuidado personal</a></li>
          <li class="proxima-nova"><a href="">Accesorios para vehiculos</a></li>
          <li class="proxima-nova"><a href="">Herramientas</a></li>
          <li class="proxima-nova"><a href="">Construccion</a></li>
          <li class="proxima-nova "><a href="">Inmuebles</a></li>
          <li class="proxima-nova "><a href="">Moda</a></li>
          <li class="proxima-nova "><a href="">Juegos y juguetes</a></li>
          <li class="proxima-nova "><a href="">Bebes</a></li>
      </ul>
    </li> 
  </div>
  

      <a href="" class="nav-link2">Ofertas</a>
      <a href="" class="nav-link2">Historial</a>
      <a href="Views/productos.php" class="nav-link2">Moda</a>
      <a href="Views/vender.php" class="nav-link2">Vender</a>
      <a href="" class="nav-link2">Casillero virtual</a>
      <a href="" class="nav-link2">Ayuda</a>
      

</div> 


  
</header>