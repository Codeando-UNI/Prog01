<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Contacto</title>
</head>

<body>
	<div>
  	<!--Encabezado-->
  		<header>
  			<?php include ("menu.php");?>
  		</header>
	<!--Registro-->	
		<h1>Regístrese</h1>
	  	<form action="respuesta.php" method="post">
	  		<div>
	  			Nombre:  <input type="text" name="Nombre"/><br>
	  			Apellido:  <input type="text" name="Apellido"/><br>
	  			Mensaje:  <input type="text" name="Mensaje"/><br>  		
	  			<input type="submit" value="Enviar" />
	  		</div>
	  	</form>
	<!--Pie de pagina-->
		<footer>
			<?php include ("footer.php") ?>
		</footer>
	</div>
</body>
</html>