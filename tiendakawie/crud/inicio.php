<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admi</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
       <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">-->
        <link rel="stylesheet" href="style_reg.css">
    </head>
    <body>
    <video src="fondo/fondo1.mp4" style="z-index: -1; position: fixed;height:100% ;" type="video/mp4" autoplay muted loop class="miVideo"></video>
           
          

           
        <div class="container">
            

                    <div class="row"> 
                        
                    <h1>Administrador</h1>
                            

                                <form action="">

                                    <input type="text" class="form_input" id="usuario" name="cod_estudiante" placeholder="Ingresa usuario">
                                    <input type="password" class="form_input" id="password" name="dni" placeholder="Ingresa tu password">
                                    <input style="cursor:pointer;
                                                    background:black;
                                                    border:none;

                                     " type="button" value="Ingresar" id="boton" onclick="login()">
                                    
                                    
                                    
                                </form>
                        


                    </div>  
          
          
          
          
            </div>
    
  <script src="validar.js"></script>
     </body>
</html>