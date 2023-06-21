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
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&f
amily=Source+Sans+Pro:ital,wght@0,200;0,300;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="http://localhost/Paginamangacomic/assets/style.css">
    <title>tienda pagina y comics</title>
</head>
<body >
    <header>
        
    <div class="menu">
                <i class="fa-solid fa-bars" id="btn_menu"></i>
                <div class="back_menu">

                </div>
                <nav id="nav">
                    <img class="img_1" src="img/logo-magtimus-v2.3-1.png" alt="">
                    <ul>
                        <li><a href="#" id="selector">Inicio</a></li>
                        <li><a href="#" id="selector">Servicios</a></li>
                        <li><a href="#" id="selector">Nosotros</a></li>
                        <li><a href="#" id="selector">Contactos</a></li>
                    </ul>
                </nav>
            </div>






        <div class="cabecera">

        <div class="cabecera_logo">
                  <img id="imgpri"  src="img/anime.png" alt=""/> 
                </div>

            <!-- <div class="cabecera_logo"> </div>  ESTO NO ESTA TRABAJANDO-->
            


            <div class="cabecera_opciones">   


            <li><a href="index.php">INICIO</a></li>
            <li><a href="juegos.php">JUEGOS</a></li>
            <li><a href="comics.php">COMICS</a></li>
            <li><a href="mangas.php">MANGAS</a></li>
            
        </div>






            <div class="cabecera_buscar">
                <div class="buscar"> 
                    <button class="boton-buscar"><a href="#"><i class="fa-solid fa-magnifying-glass"></i></a> </button>
                
                </div>
                <div class="input">
                    <input type="text">
                </div>

            </div>




            
			<ul class="inre"> 
				<li><a href="crud/inicio.php">INICIAR SESION</a></li>
                <li><a href="crud/alumno.php">REGISTRAR</a></li> 
                
			</ul>
            


		</nav><!-- / nav -->

        
            
                
           
        </div>

        <section id="main-content">
	
		
	
	</section>


 <!-- / #carrusel -- IBAÑEZZZZ  

<div id="carrusel-contenido">
    <div id="carrusel-caja">
        <div class="carrusel-elemento">
            <img class="imagenes" src="img/fondoprueba.jpg" >
        </div>
        <div class="carrusel-elemento">   
            <img class="imagenes" src="img/descuento 2.png">
        </div>
        <div class="carrusel-elemento">   
            <img class="imagenes" src="img/descuento 3.png">                        
        </div>
    </div>
</div> 

-->





<div class="container-slider">
      <div class="slider" id="slider">
        <div class="slider__section">
          <img src="img/carrusel2.jpg" alt="" class="slider__img">
          <div class="slider__content">
            <h2 class="slider__title">TIENDA KAWIE</h2>
            <p class="slider__txt">Aprovecha el 50% de descuento en comics y mangas!!</p>


            <a href="#" class="btn">
              <svg width="277" height="62">
                <defs>
                    <linearGradient id="grad1">
                        <stop offset="0%" stop-color="#FF8282"/>
                        <stop offset="100%" stop-color="#E178ED" />
                    </linearGradient>
                </defs>
                 <rect x="5" y="5" rx="25" fill="none" stroke="url(#grad1)" width="266" height="50"></rect>
              </svg>
              <!--<span>Voir mes réalisations</span>-->
                <span >COMPRAR AHORA !!</span>
            </a>



          </div>
        </div>
        <div class="slider__section">
          <img src="img/fondoprueba.jpg" alt="" class="slider__img">
          <div class="slider__content">
            <h2 class="slider__title">TIENDA KAWIE</h2>
            <p class="slider__txt">Aprovecha el 50% de descuento en comics y mangas!!</p>

            <a href="#" class="btn">
              <svg width="277" height="62">
                <defs>
                    <linearGradient id="grad1">
                        <stop offset="0%" stop-color="#FF8282"/>
                        <stop offset="100%" stop-color="#E178ED" />
                    </linearGradient>
                </defs>
                 <rect x="5" y="5" rx="25" fill="none" stroke="url(#grad1)" width="266" height="50"></rect>
              </svg>
              <!--<span>Voir mes réalisations</span>-->
                <span>COMPRAR AHORA !!</span>
            </a>

          </div>
        </div>
        <div class="slider__section">
          <img src="img/carrusel3.jpg" alt="" class="slider__img">
          <div class="slider__content">
            <h2 class="slider__title">TIENDA KAWIE</h2>
            <p class="slider__txt">Aprovecha el 50% de descuento en comics y mangas!!</p>

            <a href="#" class="btn">
              <svg width="277" height="62">
                <defs>
                    <linearGradient id="grad1">
                        <stop offset="0%" stop-color="#FF8282"/>
                        <stop offset="100%" stop-color="#E178ED" />
                    </linearGradient>
                </defs>
                 <rect x="5" y="5" rx="25" fill="none" stroke="url(#grad1)" width="266" height="50"></rect>
              </svg>
              <!--<span>Voir mes réalisations</span>-->
                <span>COMPRAR AHORA !!</span>
            </a>

          </div>
        </div>
        <div class="slider__section">
          <img src="img/carrusel4.jpg" alt="" class="slider__img">
          <div class="slider__content">
            <h2 class="slider__title">TIENDA KAWIE</h2>
            <p class="slider__txt">Aprovecha el 50% de descuento en comics y mangas!!</p>
            <a href="#" class="btn">
              <svg width="277" height="62">
                <defs>
                    <linearGradient id="grad1">
                        <stop offset="0%" stop-color="#FF8282"/>
                        <stop offset="100%" stop-color="#E178ED" />
                    </linearGradient>
                </defs>
                 <rect x="5" y="5" rx="25" fill="none" stroke="url(#grad1)" width="266" height="50"></rect>
              </svg>
              <!--<span>Voir mes réalisations</span>-->
                <span>COMPRAR AHORA !!</span>
            </a>
          </div>
        </div>
      </div>
      <div class="slider__btn slider__btn--right" id="btn-right">&#62;</div>
      <div class="slider__btn slider__btn--left" id="btn-left">&#60;</div>
    </div>











<!-- / #Servicios-->
<!-- <h1 class="mangas">Mangas <hr></h1>-->


<div class="letra_auto"> 
            
            <h2 class="tituloo"><br><span class="typed"></span> </h2></div>
        


<div class="container"  >
    
    <div class="div_imagen"> 
        <img  src="img/manga 1.jpg" alt="">
    </div>

    <div class="div_imagen"> 
        <img   src="img/manga 2.jpg"  alt="">

    </div>

    <div class="div_imagen"> 
        <img  src="img/manga 3.jpg" alt="">
    </div>

    <div class="div_imagen"> 
        <img  src="img/manga 4.jpg" alt="">
    </div>

    <div class="div_imagen"> 
        <img  src="img/comic 1.jpg" alt="">
    </div>

    <div class="div_imagen"> 
        <img  src="img/arri.jpg" alt="">
    </div>

    <div class="div_imagen"> 
     <img  src="img/comic 3.jpg" alt="">
    </div>

    <div class="div_imagen"> 
        <img  src="img/juegos 3.jpg" alt="">
    </div>

    <div class="div_imagen"> 
        <img  src="img/comic 5.jpg" alt="">
    </div>

    <div class="div_imagen"> 
        <img  src="img/comic 6.jpg" alt="">
    </div>

</div>


<div class="container" style="margin-top:-50px">
    
    <div class="div_imagen"> 
        <img  src="img/spiri.jpg" alt="">
    </div>

    <div class="div_imagen"> 
        <img   src="img/whisper.jpg"  alt="">

    </div>

    <div class="div_imagen"> 
        <img  src="img/noruda.jpg" alt="">
    </div>

    <div class="div_imagen"> 
        <img  src="img/home.jpg" alt="">
    </div>

    <div class="div_imagen"> 
        <img  src="img/totoro.jpg" alt="">
    </div>

    <div class="div_imagen"> 
        <img  src="img/ocean.jpg" alt="">
    </div>

    <div class="div_imagen"> 
     <img  src="img/violet.jpg" alt="">
    </div>

    <div class="div_imagen"> 
        <img  src="img/yourname.jpg" alt="">
    </div>

    <div class="div_imagen"> 
        <img  src="img/ao1.jpg" alt="">
    </div>

    <div class="div_imagen"> 
        <img  src="img/naruto1.jpg" alt="">
    </div>

</div>
   
   
   






<!--
 #Novedades
<h1>Comic</h1>
<div class="container_comic" >
    <div style="display: flex;">
        <img id="imgser" src="img/comic 1.jpg" alt="">
        <img id="imgser" src="img/comic 2.jpg"  alt="">
        <img id="imgser" src="img/comic 3.jpg" alt="">
        <img id="imgser" src="img/comic 4.jpg" alt="">
    </div>-->





    </header>


        <footer class="footer">
            <div class="footer_1">
                <h3><i class="fa-solid fa-bookmark"></i> More kawie</h3>
                <h3 > <a style="color:green;text-decoration:none;" href="https://api.whatsapp.com/send? phone=51912729434&text= hola quiero comprar tu  producto">Envianos un mensaje <i class=" fa-brands fa-whatsapp"></a></h3>
                <h3> <i class="fa-regular fa-copyright"></i> Copyright - @Derechos Reservados 2023</h3>

            </div>
			
				
            <!--<a href="https://api.whatsapp.com/send? phone=51912729434&text= hola quiero comprar tu  producto"> dafsegsr<i class="fa-brands fa-whatsapp"></a>	-->	
				
		</footer>
















        

        <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
        <script src="script.js"></script>
        <script src="type.js"></script>
</body>
</html>