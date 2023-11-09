

$(document).ready(function() {
    
    

    var funcion;

    verificar_sesion();
    llenar_productos();
   
    
    
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

            }         

        })
    }


    let listElements = document.querySelectorAll('.lista_boton-click');

    listElements.forEach(listElement => {
        listElement.addEventListener('click',()=>{

            listElement.classList.toggle('arrow');
            
            let height = 0;
            let menu = listElement.nextElementSibling;

            
            if(menu.clientHeight == "0"){
                height=menu.scrollHeight
            }

            menu.style.height = height+"px";
        })
        
    });

  

    document.addEventListener('keyup',e=>  {
        console.log(e.target.value);

        if(e.target.matches('#buscador')){
             
            document.querySelectorAll('.ProDuctos').forEach(producto=> {
                
                producto.textContent.toLowerCase().includes(e.target.value)
                ? producto.classList.remove('filtro')
                : producto.classList.add('filtro');
            })
        }
    })


    function llenar_productos(){
        funcion="llenar_productos";
        $.post('../Controllers/productos.php', { funcion } , (response)=>{
            
            
            let productos=JSON.parse(response);
            let contador=0;
            let template = '';
            productos.forEach(producto =>{   
                contador++;     
                template+=`
                <div class="col-sm-3 ProDuctos">
                    <div class="card" style="height: 410px">
                        <div class="card-header card-img-top" class="img-fluid" style="height:200px">
                        <div class="card-tools">
                        <button type="button" class="btn btn-tool sinestilobotton"> <i class="fa-regular fa-heart"></i> </button>
                        </div>
                            <img src="../Util/Img/productos/${producto.imagen}" width="100%" height="100%" class="img-fluid"></img>
                            
                        </div>
                        
                        <div class="card-body">
                        <a class="titulo-producto-a" href="#" ><h5 class="Titulo-producto"> ${producto.nombre}</h5></a>
                            <div class="contenedor-price">
                                <p class="price">$${producto.valor}</p><b class="oferta-porcentaje">29% OFF</b>
                            </div>
                            <p class="cuotas-producto">en 12x $${producto.division}</p>
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
                `;
            });
            $('#productos_a_mostrar').html(template);
    
        })     
    }

const btnCart = document.querySelector('.container-cart-icon')
const containerCartProducts = document.querySelector('.container-cart-products')

    
    btnCart.addEventListener('click',()=> {
        containerCartProducts.classList.toggle('hidden-cart')

    })


const cartInfo = document.querySelector('.cart-product')
const rowProduct = document.querySelector('.row-product')


const productsList = document.querySelector('.contenedor-productos')




let allProducts = []

const valorTotal = document.querySelector('.total-pagar')




const countProducts = document.querySelector('#contador-productos')

productsList.addEventListener('click', e=> {

    

  
    
    if(e.target.classList.contains('icon-cart-productos')){
       
       const product = e.target.parentElement.parentElement.parentElement.parentElement

       const infoProduct = {
        quantity: 1,
        title: product.querySelector('h5').textContent,
        price: product.querySelector('p').textContent,
        
       }
       
    const exits = allProducts.some(product => product.title ==infoProduct.title)

    
    if(exits){
        const products = allProducts.map(product=> {   
            if(product.title=== infoProduct.title){
                product.quantity++;
                return product
            }else{
                return product
            }

        })
        allProducts = [...allProducts]
    }else{   
        allProducts = [...allProducts, infoProduct]
    }
    
    showHTML();

    }


})


rowProduct.addEventListener('click', (e)=>{ 
    if(e.target.classList.contains('icon-close')){ 
        const product = e.target.parentElement
        const title = product.querySelector('p').textContent

        allProducts = allProducts.filter(product=> product.title !== title);
    }
    
    console.log(allProducts);
    showHTML();
})

const showHTML = () => {

    
    if(!allProducts.length){
        containerCartProducts.innerHTML=`
        <p class="cart-empty"> El carrito esta vacio</p>
        `
    }
    rowProduct.innerHTML='';

    let total=0;
    let totalOfProducts=0;


    allProducts.forEach(product =>{
        const containerProduct = document.createElement('div')
        containerProduct.classList.add('cart-product')

        containerProduct.innerHTML = `
                        <div class="info-cart-product">
                            <span class="cantidad-producto-carrito">${product.quantity}</span>
                            <p class="titulo-producto-carrito">${product.title}</p>
                            <span class="precio-producto-carrito">${product.price}</span>
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

        `;
        rowProduct.append(containerProduct);
        
        total = total + parseInt(product.quantity * product.price.slice(1));
        totalOfProducts = totalOfProducts + product.quantity;
    
    });

    valorTotal.innerText = `$${total}`;
    countProducts.innerText = totalOfProducts;


};


$('#detallespedidoproductos').submit(e =>{

    funcion = 'insertar_pedido';


    let montototal=$('#total-pagar').val();

    console.log(montotal);
    e.preventDefault();
   
    $.post('../Controllers/productos.php',  {montototal,funcion},
    (response)=>{
        console.log(response);
        if(response=='success'){
            Swal.fire({
                title: 'Correcto!',
                text: 'Se Registro Correctamente',
                icon: 'success',
                confirmButtonText: 'Aceptar'
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


// $(document).on('click','.subirpedido',(e)=>{

//     var montototal = $('#total-pagar').html();

//     var direccion = 'casa 3 barrio kennedy';

//     funcion="insertar_pedido";

//     e.preventDefault();
   
//     $.post('../Controllers/productos.php', {funcion,montototal,direccion}, (response)=>{
//         console.log(direccion);
//         if(response=='success'){
//             console.log(montotal);
//         }
//         e.preventDefault();  
        
//     })
// })








})