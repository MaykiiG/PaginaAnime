<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM alumno";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA ALUMNO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
       <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">-->
        <link rel="stylesheet" href="style_reg.css">
    </head>
    <body>
    <video src="fondo/fondo2.mp4" style="z-index: -1; position: fixed;height:100% ;" type="video/mp4" autoplay muted loop class="miVideo"></video>
           
          

           
        <div class="container">
            

                    <div class="row"> 
                        
                    <h1>Registro</h1>
                            

                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form_input" name="cod_estudiante" placeholder="Ingresa tu id">
                                    <input type="text" class="form_input" name="dni" placeholder="Ingresa tu DNI">
                                    <input type="text" class="form_input" name="nombres" placeholder="Ingresa tus nombres">
                                    <input type="text" class="form_input" name="apellidos" placeholder="Ingresa tus apellidos">
                                    
                                    <input  style="cursor:pointer;
                                                    background:black;
                                                    border:none;

                                     "type="submit" class="btn btn-primary" onclick="introducir()">
                                </form>
                        


                    </div>  
          
          
          
          
            </div>
    
            <script src="validar.js"></script>
     </body>
</html>