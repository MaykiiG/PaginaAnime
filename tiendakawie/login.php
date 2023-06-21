<?php
include("conexion.php");
?>



<!DOCTYPE HTML>
<html>
	<head>
		<title>tienda pagina y comics</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/login.css" />
	</head>
	<body>
            <div class="container">
            	<div class="row">
                    <div class="col-md-4">

					<div class="logo">
                        <img src="img/anime.png" class="logo">
						<h2>Tienda kawie
						</h2>
					</div>
                        
                  
                    <div class="col-md-4">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        
                    </div>
                    <div class="col-md-4">
                        <br><h3>INICIAR SESIÓN</h3>
				        <br>
				        <form method="post" action="index.php">
                            <div class="form-group">
								<input type="email" name="correo" value="" placeholder="Usuario" class="form-control"/><br>
								<input type="password" name="clave" value="" placeholder="Password" class="form-control"/><br>
				            <footer>  
				                    <br><input type="submit" value="INGRESAR" name="login"/>
									<a href="crear.php" style="font-size: 1.25em;
										font-weight: bold;
										padding: 5px 10px;
										border-radius: 5px;
										border: 2px solid rgba(0,0,0,0.3);
										box-shadow: 2px 2px 10px rgba(0,0,0	0.5);
										color: black;
										background-color: white;
										text-decoration: none;"> REGISTRAR</a>
				            </footer>
				            </div>
						</form>
					</div>
                    <div class="col-md-4">
                        
                    </div>
                </div>
            </div>			
		
	</body>
</html>
