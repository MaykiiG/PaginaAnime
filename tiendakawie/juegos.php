<?php
include("conexion.php");

echo"";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="http://localhost/Paginamangacomic/assets/juegos.css">
    <title>tienda pagina y comics</title>
</head>
<body>





    <header>
        
        <div class="cabecera">
            

            <div class="cabecera_logo">
                  <img id="imgpri"  src="img/anime.png" alt=""/> 
                </div>

            <div class="cabecera_opciones"> 

            <li><a href="index.php">INICIO</a></li>
            <li><a href="juegos.php">JUEGOS</a></li>
            <li><a href="comics.php">COMICS</a></li>
            <li><a href="mangas.php">MANGAS</a></li>
            <li><a href="">TIENDAS</a></li>
        </div>


<!-- Parte funcinal - no tocar-->
        <div class="container-icon">
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
                <div class="row-product hidden">
                    <div class="cart-product">
                        <div class="info-cart-product">
                            <span class="cantidad-producto-carrito">1</span>
                            <p class="titulo-producto-carrito">Mangas</p>
                            <span class="precio-producto-carrito">$80</span>
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




                <div class="cart-total hidden">
                    <h3>Total:</h3>
                    <span class="total-pagar">$12</span>
                </div>
                <p class="cart-empty"></p>
            </div>
        </div>
    </header>


















    <div class="container-items">



        <div class="item">
            <figure>
                <img
                    src="img/juegos 1.jpg"
                    alt="producto"
                />
            </figure>
            <div class="info-product">
                <h2>Kimetsu no Yaiba: Hinokami Keppūtan</h2>
                <p class="price">$45</p>
                <button class="btn-add-cart">Añadir al carrito</button>
            </div>
        </div>


        
        <div class="item">
            <figure>
                <img
                    src="img/juegos 2.jpg"
                    alt="producto"
                />
            </figure>
            <div class="info-product">
                <h2>Naruto Shippuden: Ultimate Ninja Storm 4</h2>
                <p class="price">$20</p>
                <button class="btn-add-cart">Añadir al carrito</button>
            </div>
        </div>
        <div class="item">
            <figure>
                <img
                    src="img/juegos 3.jpg"
                    alt="producto"
                />
            </figure>
            <div class="info-product">
                <h2>Genshin Impact: Version PC-mobile</h2>
                <p class="price">$56</p>
                <button class="btn-add-cart">Añadir al carrito</button>
            </div>
        </div>
        <div class="item">
            <figure>
                <img
                    src="img/juegos 4.jpg"
                    alt="producto"
                />
            </figure>
            <div class="info-product">
                <h2>Captain Tsubasa: Rise of New Champions</h2>
                <p class="price">$36</p>
                <button class="btn-add-cart">Añadir al carrito</button>
            </div>
        </div>
        <div class="item">
            <figure>
                <img
                    src="img/juegos 5.jpg"
                    alt="producto"
                />
            </figure>
            <div class="info-product">
                <h2>Spider-Man for PC(gamer) and PS4</h2>
                <p class="price">$45</p>
                <button class="btn-add-cart  boton-item">Añadir al carrito</button>
            </div>
        </div>
        <div class="item">
            <figure>
                <img
                    src="img/juegos 6.jpg"
                    alt="producto"
                />
            </figure>
            <div class="info-product">
                <h2>Batman: Arkham Knight  Arkham Knight</h2>
                <p class="price">$25</p>
                <button class="btn-add-cart">Añadir al carrito</button>
            </div>
        </div>


    </div>
    
    <script src="index.js"></script>







    </header>

    
       
    <footer class="footer">
        <div class="footer_1">
            <h3><i class="fa-solid fa-bookmark"></i> More kawie</h3>
            <h3 > <a style="color:green;text-decoration:none;" href="https://api.whatsapp.com/send? phone=51912729434&text= hola quiero comprar tu  producto">Envianos un mensaje <i class=" fa-brands fa-whatsapp"></a></h3>
            <h3> <i class="fa-regular fa-copyright"></i> Copyright - @Derechos Reservados 2023</h3>

        </div>
        
            
        <!--<a href="https://api.whatsapp.com/send? phone=51912729434&text= hola quiero comprar tu  producto"> dafsegsr<i class="fa-brands fa-whatsapp"></a>	-->	
            
    </footer>

</body>
</html>