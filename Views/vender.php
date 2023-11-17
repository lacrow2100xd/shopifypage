<?php
include("Layouts/general/header.php");
?>

<body class="vender">
    <div class="contenedordeltitulo">
        <div class="titulo">
            <div class="card mx-auto contenedor-titulo-vender" style="width: 60%;">
                <h1 class="estilos-titulo">¡Hola! Antes que nada cuéntanos,</h1>
                <h1 class="estilos-titulo2">¿qué vas a publicar?</h1>

            </div>
        </div>
    </div>

    <div class="categorias_boton">

        <div class="row caja-categorias-grande mx-auto" id="escondercategoria" style="width: 60%;">

            <div class="col-sm-2 padding-categorias">
                <div class="card categorias_cajas" style="width: 100%; height: 215px;">
                    <button onclick="mostrar();" class="botton" id="1" style="width: 100%; height: 215px;">
                        <div>
                            <img src="../Util/Img/car.svg" id="pruebajajaja" style="width: 100%; "></img>
                            <b class="titulocategorias">Vehiculos</b>
                    </button>
                </div>

            </div>

            <div class="col-sm-2 padding-categorias">

                <div class="card categorias_cajas" style="width: 100%; height: 215px;">
                    <button onclick="mostrar(); " class="botton" id="2" style="width: 100%; height: 215px;">
                        <img src="../Util/Img/computer.svg" style="width: 100%; "></img>
                        <b class="titulocategorias">Tecnologia</b>
                    </button>
                </div>

            </div>
            <div class="col-sm-2 padding-categorias ">

                <div class="card categorias_cajas " style="width: 100%; height: 215px;">
                    <button onclick="mostrar(); " class="botton" id="3" style="width: 100%; height: 215px;">
                        <img src="../Util/Img/electrodomesticos.svg" style="width: 100%; "></img>
                        <b class="titulocategorias">Electrodomesticos</b>
                    </button>
                </div>


            </div>
            <div class="col-sm-2 padding-categorias ">

                <div class="card categorias_cajas " style="width: 100%; height: 215px;">
                    <button onclick="mostrar(); " class="botton" id="4" style="width: 100%; height: 215px;">
                        <img src="../Util/Img/hogarymuebles.svg" style="width: 100%; "></img>
                        <b class="titulocategorias">Hogar y muebles</b>
                    </button>
                </div>

            </div>
            <div class="col-sm-2 padding-categorias">

                <div class="card categorias_cajas " style="width: 100%; height: 215px;">
                    <button onclick="mostrar(); " class="botton" id="5" style="width: 100%; height: 215px;">
                        <img src="../Util/Img/deportes.svg" style="width: 100%; "></img>
                        <b class="titulocategorias">Deportes y fitness</b>
                    </button>
                </div>


            </div>
            <div class="col-sm-2 padding-categorias">

                <div class="card categorias_cajas " style="width: 100%; height: 215px;">
                    <button onclick="mostrar(); " class="botton" id="6" style="width: 100%; height: 215px;">
                        <img src="../Util/Img/cuidadopersonal.png" style="width: 100%; "></img>
                        <b class="titulocategorias">Belleza y cuidado</b>
                    </button>
                </div>


            </div>
            <div class="col-sm-2 padding-categorias">

                <div class="card categorias_cajas " style="width: 100%; height: 215px;">
                    <button onclick="mostrar(); " class="botton" id="7" style="width: 100%; height: 215px;">
                        <img src="../Util/Img/herramientas.svg" style="width: 100%; "></img>
                        <b class="titulocategorias">Herramientas</b>
                    </button>
                </div>

            </div>
            <div class="col-sm-2 padding-categorias ">

                <div class="card categorias_cajas " style="width: 100%; height: 215px;">
                    <button onclick="mostrar(); " class="botton" id="8" style="width: 100%; height: 215px;">
                        <img src="../Util/Img/construccion.svg" style="width: 100%; "></img>
                        <b class="titulocategorias">Construccion</b>
                    </button>
                </div>

            </div>
            <div class="col-sm-2 padding-categorias">

                <div class="card categorias_cajas " style="width: 100%; height: 215px;">
                    <button onclick="mostrar(); " class="botton" id="9" style="width: 100%; height: 215px;">
                        <img src="../Util/Img/inmuebles.svg" style="width: 100%; "></img>
                        <b class="titulocategorias">Inmuebles</b>
                    </button>
                </div>

            </div>
            <div class="col-sm-2 padding-categorias">

                <div class="card categorias_cajas " style="width: 100%; height: 215px;">
                    <button onclick="mostrar(); " class="botton" id="10" style="width: 100%; height: 215px;">
                        <img src="../Util/Img/videojuegos.svg" style="width: 100%; "></img>
                        <b class="titulocategorias">Consolas y juegos</b>
                    </button>
                </div>

            </div>
            <div class="col-sm-2 padding-categorias">

                <div class="card categorias_cajas " style="width: 100%; height: 215px;">
                    <button onclick="mostrar(); " class="botton" id="11" style="width: 100%; height: 215px;">
                        <img src="../Util/Img/moda.svg" style="width: 100%; "></img>
                        <b class="titulocategorias">Moda</b>
                    </button>
                </div>

            </div>
            <div class="col-sm-2 padding-categorias">

                <div class="card categorias_cajas " style="width: 100%; height: 215px;">
                    <button onclick="mostrar(); " class="botton" id="12" style="width: 100%; height: 215px;">
                        <img src="../Util/Img/toys.svg" style="width: 100%; "></img>
                        <b class="titulocategorias">Juegos y juguetes</b>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <main>
        <div class="contenedor">

            <div class="card mx-auto box gradient" id="vendercard" style="width: 30%;">
                <div class="vender-titulo">
                    <h2 class="vender-titulo-color">Vender</h2>
                </div>
                <div class="card-body centrado-facil">
                    <form id="form-vender" enctype="multipart/form-data">
                        <div class="centrado-de-titulos-label">
                            <label class="centrado-de-titulos" for="nombre">Nombre del producto</label>
                        </div>
                        <div class="form-group">

                            <input type="text" name="nombre" class="form-control input-vender" id="nombre">
                        </div>
                        <div class="centrado-de-titulos-label">
                            <label class="centrado-de-titulos" for="valor">Valor del producto</label>
                        </div>
                        <div class="form-group">

                            <input type="text" name="valor" class="form-control input-vender" id="valor">
                        </div>
                        <div class="centrado-de-titulos-label">
                            <label class="centrado-de-titulos" for="existencia">Existencia</label>
                        </div>
                        <div class="form-group input-alinear">
                            <input type="text" name="existencia" class="form-control input-vender text-center"
                                id="existencia">
                        </div>


                        <label class="letralabel">Imagen</label>
                        <div class="form-group input-vender">
                            <div class="input-group">
                                <div class="custom-file ">
                                    <input type="file" class="custom-file-input " name="imagen" id="imagen">
                                    <label class="custom-file-label" for="imagen">Seleccione una imagen</label>
                                </div>

                            </div>
                        </div>
                        <label class="letralabel"> &nbsp;</label>
                        <div class="form-group centrar-inputs">
                            <button type="submit" class="btn btn-light tamaño-boton-vender">Añadir</button>
                        </div>


                    </form>
                </div>
            </div>




        </div>
    </main>


</body>


<?php
include("Layouts/general/footer.php");
?>

<script src="vender.js"></script>