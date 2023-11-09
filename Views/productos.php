
<?php 
include("Layouts/general/header.php");
?>
<body class="color_fondo">

<div class="card-body">
    <div class="row" >
        <div class="barra-vertical col-3">
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><h4 class="filtrar">Filtrar por</h4></li>
                
                    <li class="list-group-item titulos-barra-nav list-item--click">
                        <div class="list_button lista_boton-click">
                            <a class="nav_link">Categorías</a> 
                            <i class="fa-solid fa-chevron-down list_arrow"></i>
                        </div>
                        <ul class="list_show">
                            
                            <li class="list-inside">
                                <span class="separador-lista-inside nav_link--inside">
                                    <a class="nav_link ">Vehiculos</a><i class="plus fa-solid fa-plus"></i>
                                </span>                                      
                            </li>
                            <li class="list-inside">
                                <span class="separador-lista-inside nav_link--inside">
                                    <a class="nav_link">Tecnologia</a><i class="plus fa-solid fa-plus"></i> 
                                </span>
                            </li>
                            <li class="list-inside">
                                <span class="separador-lista-inside nav_link--inside">
                                    <a class="nav_link ">Electrodomesticos</a><i class="plus fa-solid fa-plus"></i> 
                                </span> 
                            </li>
                            <li class="list-inside">
                                <span class="separador-lista-inside nav_link--inside">
                                    <a class="nav_link ">Hogar y muebles</a><i class="plus fa-solid fa-plus"></i> 
                                </span> 
                            </li>
                            <li class="list-inside">
                                <span class="separador-lista-inside nav_link--inside">
                                    <a class="nav_link ">Deporte y fitness</a><i class="plus fa-solid fa-plus"></i> 
                                </span> 
                            </li>
                            <li class="list-inside">
                                <span class="separador-lista-inside nav_link--inside">
                                    <a class="nav_link ">Belleza y cuidado personal</a><i class="plus fa-solid fa-plus"></i> 
                                </span> 
                            </li>
                            <li class="list-inside">
                                <span class="separador-lista-inside nav_link--inside">
                                    <a class="nav_link ">Accesorios para vehiculos</a><i class="plus fa-solid fa-plus"></i> 
                                </span> 
                            </li>
                            <li class="list-inside">
                                <span class="separador-lista-inside nav_link--inside">
                                    <a class="nav_link ">Herramientas</a><i class="plus fa-solid fa-plus"></i> 
                                </span> 
                            </li>
                            <li class="list-inside">
                                <span class="separador-lista-inside nav_link--inside">
                                    <a class="nav_link ">Construccion</a><i class="plus fa-solid fa-plus"></i> 
                                </span> 
                            </li>
                            <li class="list-inside">
                                <span class="separador-lista-inside nav_link--inside">
                                    <a class="nav_link ">Inmuebles</a><i class="plus fa-solid fa-plus"></i> 
                                </span> 
                            </li>
                            <li class="list-inside">
                                <span class="separador-lista-inside nav_link--inside">
                                    <a class="nav_link ">Moda</a><i class="plus fa-solid fa-plus"></i> 
                                </span> 
                            </li>
                            <li class="list-inside">
                                <span class="separador-lista-inside nav_link--inside">
                                    <a class="nav_link ">Juegos y juguetes</a><i class="plus fa-solid fa-plus"></i> 
                                </span> 
                            </li>
                            <li class="list-inside">
                                <span class="separador-lista-inside nav_link--inside">
                                    <a class="nav_link ">Bebes</a><i class="plus fa-solid fa-plus"></i> 
                                </span> 
                            </li>

                        </ul>
                    </li>
                    
                    <li class="list-group-item"><b class="list_button">Precio</b>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                        <label class="form-check-label" for="checkbox1">
                            Entre  1 y 100
                        </label><br>
                        <input class="form-check-input" type="checkbox" value="" id="checkbox2">
                        <label class="form-check-label" for="checkbox2">
                            Entre 100 y 500 
                        </label><br>
                        <input class="form-check-input" type="checkbox" value="" id="checkbox3">
                        <label class="form-check-label" for="checkbox3">
                            Entre 500 y 1000 
                        </label><br>
                    </div>

                    </li>
                    <li class="list-group-item"><b class="list_button">Calificación</b>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                        <label class="form-check-label" for="checkbox1">
                            <i class="fas fa-star text-warning"></i> 
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            &nbsp; 5 o más
                        
                        </label><br>
                        <input class="form-check-input" type="checkbox" value="" id="checkbox2">
                        <label class="form-check-label" for="checkbox2">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="far fa-star text-warning"></i>
                            &nbsp; 4 o más 
                        </label><br>
                        <input class="form-check-input" type="checkbox" value="" id="checkbox3">
                        <label class="form-check-label" for="checkbox3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="far fa-star text-warning"></i>
                            <i class="far fa-star text-warning"></i>
                            &nbsp; 3 o más
                        </label><br>
                        <input class="form-check-input" type="checkbox" value="" id="checkbox3">
                        <label class="form-check-label" for="checkbox3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="far fa-star text-warning"></i>
                            <i class="far fa-star text-warning"></i>
                            <i class="far fa-star text-warning"></i>
                            &nbsp; 2 o más 
                        </label><br>
                        <input class="form-check-input" type="checkbox" value="" id="checkbox3">
                        <label class="form-check-label" for="checkbox3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="far fa-star text-warning"></i>
                            <i class="far fa-star text-warning"></i>
                            <i class="far fa-star text-warning"></i>
                            <i class="far fa-star text-warning"></i>
                            &nbsp; 1 o más 
                        </label><br>
                    </div>

                    </li>
                </ul>
            </div>

        </div>
        <div class="col-9 padding-productos">
            <div class="row contenedor-productos" id="productos_a_mostrar">
                <div class="col-sm-3 ProDuctos">
                    <div class="card" style="height: 410px">
                        <div class="card-header card-img-top" class="img-fluid" style="height:200px">
                            <img src="../Util/Img/productos/consola.webp" width="100%" height="100%" class="img-fluid"></img>
                        </div>
                        <div class="card-body">
                            <h5 class="Titulo-producto">Nintendo Switch OLED 64GB Standard color negro</h5>
                            <div class="contenedor-price">
                                <p class="price">$308,00</p><b class="oferta-porcentaje">29% OFF</b>
                            </div>
                            <p class="cuotas-producto">en 36x $38.059</p>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="far fa-star text-warning"></i>
                            <i class="far fa-star text-warning"></i>

                            <div class="carrito-contenedor card-tools">
            <b class="badge badge-primary">Envío gratis<span class="full"><span></b>
            <button class="btn btn-tool"><i><svg
            xmlns="http://www.w3.org/2000/svg"
					  fill="none"
					  viewBox="0 0 32 32"
					  stroke-width="1.5"
					  stroke="currentColor"
					  class="icon-cart-productos"
            >
					  <path
						stroke-linecap="round"
						stroke-linejoin="round"
						d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"
					  />
				    </svg></i>
          </button>
            </div>
                            
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 ProDuctos" >
                    <div class="card" style="height: 410px">
                        <div class="card-header card-img-top" style="height:200px">
                            <img src="../Util/Img/productos/asus.webp" width="100%" height="100%" class="img-fluid"></img>
                        </div>
                        <div class="card-body">
                            <h5 class="Titulo-producto">Portatil Asus E1504fa-nj474 Ryzen 5-7520u 512gb</h5>
                            <div class="contenedor-price">
                                <p class="price">$448,36</p><b class="oferta-porcentaje">17% OFF</b>
                            </div>
                            <p class="cuotas-producto">en 36x $52.500</p>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="far fa-star-half-stroke text-warning"></i>
                            <i class="far fa-star text-warning"></i>
                            
                            <div class="carrito-contenedor card-tools">
                                <div class="contenedor-pequeño">
            <b class="badge badge-primary">Envío gratis</b>&nbsp;<span class="badge badge-warning"><i class="fa-solid fa-bolt"></i>FULL</span></div>
            <button class="btn btn-tool"><i><svg
            xmlns="http://www.w3.org/2000/svg"
					  fill="none"
					  viewBox="0 0 32 32"
					  stroke-width="1.5"
					  stroke="currentColor"
					  class="icon-cart-productos"
            >
					  <path
						stroke-linecap="round"
						stroke-linejoin="round"
						d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"
					  />
				    </svg></i>
          </button>
            </div>
                        </div>      
                    </div>
                </div>
                <div class="col-sm-3 ProDuctos">
                    <div class="card" style="height: 410px">
                        <div class="card-header card-img-top img-fluid" style="height:200px">
                            <img src="../Util/Img/productos/xbox.webp" width="100%" height="100%" ></img>
                        </div>
                        <div class="card-body">
                            <h5 class="Titulo-producto">Microsoft Xbox Series S 512GB color blanco</h5>
                            <div class="contenedor-price">
                                <p class="price">$343,98</p><b class="oferta-porcentaje">24% OFF</b>
                            </div>
                            <p class="cuotas-producto">en 36x $40.275</p>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="far fa-star text-warning"></i>
                            <div class="carrito-contenedor card-tools">
            <b class="badge badge-primary" ">Envío gratis<span class="full"> <span></b>
            <button class="btn btn-tool"><i><svg
            xmlns="http://www.w3.org/2000/svg"
					  fill="none"
					  viewBox="0 0 32 32"
					  stroke-width="1.5"
					  stroke="currentColor"
					  class="icon-cart-productos"
            >
					  <path
						stroke-linecap="round"
						stroke-linejoin="round"
						d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"
					  />
				    </svg></i>
          </button>
            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 ProDuctos" >
                    <div class="card" style="height: 410px">
                        <div class="card-header card-img-top" style="height:200px">
                            <img src="../Util/Img/productos/tablet.webp" width="100%" height="100%" class="img-fluid"></img>
                        </div>
                        <div class="card-body">
                            <h5 class="Titulo-producto">Tablet Amazon Fire HD 10 2021 KFTRWI 10.1" 32GB black </h5>
                            <div class="contenedor-price">
                                <p class="price">$118,99</p><b class="oferta-porcentaje">39% OFF</b>
                            </div>
                            <p class="cuotas-producto">en 36x $13.250</p>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="far fa-star-half-stroke text-warning"></i>
                            <div class="carrito-contenedor card-tools">
            <b class="badge badge-primary" ">Envío gratis<span class="full"><span></b>
            <button class="btn btn-tool"><i><svg
            xmlns="http://www.w3.org/2000/svg"
					  fill="none"
					  viewBox="0 0 32 32"
					  stroke-width="1.5"
					  stroke="currentColor"
					  class="icon-cart-productos"
            >
					  <path
						stroke-linecap="round"
						stroke-linejoin="round"
						d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"
					  />
				    </svg></i>
          </button>
            </div>
                        </div>
                        
                        
                    </div>
                </div>
                <div class="col-sm-3 ProDuctos" >
                    <div class="card" style="height: 410px">
                        <div class="card-header card-img-top" style="height:200px">
                            <img src="../Util/Img/productos/tablet-samsumg.webp" width="100%" height="100%" class="img-fluid"></img>
                        </div>
                        <div class="card-body">
                            <h5 class="Titulo-producto">Tablet Samsung Galaxy Tab A A8 Sm-x200 10.5 64gb 4gb Ram </h5>
                            <div class="contenedor-price">
                                <p class="price">$186,99</p><b class="oferta-porcentaje">15% OFF</b>
                            </div>
                            <p class="cuotas-producto">en 36x $13.250</p>
                            <i class="fas fa-star text-warning"></i>
                            <i class="far fa-star-half-stroke text-warning"></i>
                            <i class="far fa-star text-warning"></i>
                            <i class="far fa-star text-warning"></i>
                            <i class="far fa-star text-warning"></i>
                            <div class="carrito-contenedor card-tools">
            <b class="">&nbsp;<span class="full"><span></b>
            <button class="btn btn-tool"><i><svg
            xmlns="http://www.w3.org/2000/svg"
					  fill="none"
					  viewBox="0 0 32 32"
					  stroke-width="1.5"
					  stroke="currentColor"
					  class="icon-cart-productos"
            >
					  <path
						stroke-linecap="round"
						stroke-linejoin="round"
						d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"
					  />
				    </svg></i>
          </button>
            </div>
                        </div>
                        
                        
                    </div>
                </div>
                <div class="col-sm-3 ProDuctos" >
                    <div class="card" style="height: 410px">
                        <div class="card-header card-img-top" style="height:200px">
                            <img src="../Util/Img/productos/disco_solido.webp" width="100%" height="100%" class="img-fluid"></img>
                        </div>
                        <div class="card-body">
                            <h5 class="Titulo-producto">Disco sólido SSD interno Adata Ultimate SU650 ASU650SS </h5>
                            <div class="contenedor-price">
                                <p class="price">$28.26</p><b class="oferta-porcentaje">60% OFF</b>
                            </div>
                            <p class="cuotas-producto">en 36x $13.250</p>
                            
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="far fa-star-half-stroke text-warning"></i>
                            <i class="far fa-star text-warning"></i>
                            <i class="far fa-star text-warning"></i>
                            <div class="carrito-contenedor card-tools">
                            <div class="contenedor-pequeño">
                            <b class="badge badge-primary" ">Envío gratis<span class="full"><span></b> <b class="badge badge-info">Más vendido</b>&nbsp;</div>
                                
            
            <button class="btn btn-tool"><i><svg
            xmlns="http://www.w3.org/2000/svg"
					  fill="none"
					  viewBox="0 0 32 32"
					  stroke-width="1.5"
					  stroke="currentColor"
					  class="icon-cart-productos"
            >
					  <path
						stroke-linecap="round"
						stroke-linejoin="round"
						d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"
					  />
				    </svg></i>
          </button>
            </div>
                        </div>
                        
                        
                    </div>
                </div>
                <div class="col-sm-3 ProDuctos" >
                    <div class="card" style="height: 410px">
                        <div class="card-header card-img-top" style="height:200px">
                            <img src="../Util/Img/productos/impresoramulti.webp" width="100%" height="100%" class="img-fluid"></img>
                        </div>
                        <div class="card-body">
                            <h5 class="Titulo-producto">Impresora a color multifunción HP Smart Tank 519</h5>
                            <div class="contenedor-price">
                                <p class="price">$128,39</p><b class="oferta-porcentaje">23% OFF</b>
                            </div>
                            <p class="cuotas-producto">&nbsp;</p>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="far fa-star text-warning"></i>
                            <div class="carrito-contenedor card-tools">
                            <span class="badge badge-success"><i class="fa-solid fa-sack-dollar fa-beat-fade"></i> OFERTA</span>
            <button class="btn btn-tool"><i><svg
            xmlns="http://www.w3.org/2000/svg"
					  fill="none"
					  viewBox="0 0 32 32"
					  stroke-width="1.5"
					  stroke="currentColor"
					  class="icon-cart-productos"
            >
					  <path
						stroke-linecap="round"
						stroke-linejoin="round"
						d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"
					  />
				    </svg></i>
          </button>
            </div>
                        </div>
                        
                        
                    </div>
                </div>
                <div class="col-sm-3 ProDuctos" >
                    <div class="card" style="height: 410px">
                    <div class="card-header card-img-top" class="img-fluid" style="height:200px">
                            <img src="../Util/Img/productos/sankey.webp" width="100%" height="100%" class="img-fluid"></img>
                        </div>
                        <div class="card-body">
                            <h5 class="Titulo-producto">Tablet Samsung Galaxy Tab A A8 Sm-x200 10.5 64gb 4gb Ram </h5>
                            <div class="contenedor-price">
                                <p class="price">$186,99</p><b class="oferta-porcentaje">15% OFF</b>
                            </div>
                            <p class="cuotas-producto">en 36x $13.250</p>
                            <i class="fas fa-star text-warning"></i>
                            <i class="far fa-star-half-stroke text-warning"></i>
                            <i class="far fa-star text-warning"></i>
                            <i class="far fa-star text-warning"></i>
                            <i class="far fa-star text-warning"></i>
                            <div class="carrito-contenedor card-tools">
            <b class="">&nbsp;<span class="full"><span></b>
            <button class="btn btn-tool"><i><svg
            xmlns="http://www.w3.org/2000/svg"
					  fill="none"
					  viewBox="0 0 32 32"
					  stroke-width="1.5"
					  stroke="currentColor"
					  class="icon-cart-productos"
            >
					  <path
						stroke-linecap="round"
						stroke-linejoin="round"
						d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"
					  />
				    </svg></i>
          </button>
            </div>
                        </div>
                        
                        
                    </div>
                </div>
                <div class="col-sm-3 ProDuctos" >
                    <div class="card" style="height: 410px">
                        <div class="card-header card-img-top" style="height:200px">
                            <img src="../Util/Img/productos/macbook_air.webp" width="100%" height="100%" class="img-fluid"></img>
                        </div>
                        <div class="card-body">
                            <h5 class="Titulo-producto">Portatil Apple Macbook Air (13 pulgadas, 256 GB) </h5>
                            <div class="contenedor-price">
                                <p class="price">$910,00</p><b class="oferta-porcentaje">   </b>
                            </div>
                            <p class="cuotas-producto">en 36x $107.513</p>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <div class="carrito-contenedor card-tools">
                            <div class="contenedor-pequeño">
            <b class="badge badge-primary">Envío gratis</b>&nbsp;<span class="badge badge-success"><i class="fa-solid fa-sack-dollar fa-beat-fade"></i> OFERTA</span></div>
            <button class="btn btn-tool"><i><svg
            xmlns="http://www.w3.org/2000/svg"
					  fill="none"
					  viewBox="0 0 32 32"
					  stroke-width="1.5"
					  stroke="currentColor"
					  class="icon-cart-productos"
            >
					  <path
						stroke-linecap="round"
						stroke-linejoin="round"
						d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"
					  />
				    </svg></i>
          </button>
            </div>
                        </div>
                        
                        
                    </div>
                </div>
                <div class="col-sm-3 ProDuctos" >
                    <div class="card" style="height: 410px">
                        <div class="card-header card-img-top" style="height:200px">
                            <img src="../Util/Img/productos/juegodecartas.webp" width="100%" height="100%" class="img-fluid"></img>
                        </div>
                        <div class="card-body">
                            <h5 class="Titulo-producto">Juego de cartas Uno Minimalista Mattel GYH69</h5>
                            <div class="contenedor-price">
                                <p class="price">$5,69</p><b class="oferta-porcentaje">3% OFF</b>
                            </div>
                            <p class="cuotas-producto">36x $670,92</p>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="far fa-star-half-stroke text-warning"></i>
                            <div class="carrito-contenedor card-tools">
                                
                            <div class="contenedor-pequeño">
            <b class="badge badge-dark"><i class="fa-brands fa-shopify"></i> Recomendado</b>&nbsp;</div>
            <button class="btn btn-tool"><i><svg
            xmlns="http://www.w3.org/2000/svg"
					  fill="none"
					  viewBox="0 0 32 32"
					  stroke-width="1.5"
					  stroke="currentColor"
					  class="icon-cart-productos"
            >
					  <path
						stroke-linecap="round"
						stroke-linejoin="round"
						d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"
					  />
				    </svg></i>
          </button>
            </div>
                        </div>      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<body class="color_fondo">


<?php 
include("Layouts/general/footer.php");
?>



<script src="productos.js"></script>