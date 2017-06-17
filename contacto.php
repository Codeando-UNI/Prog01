<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Document</title>
</head>

<body>

<?php
include_once ("menu.html");
?>

  <h1 style="font-size: 50px; color: blue "> <center>Regìstrese </center></h1>

  <form action="http://www.youtube.com" method="post">
  
  <h3 class="m-t-3"><span class="step">1</span> Nombre:  <input type="text" name="nombre" value="" /></h3>
 
  <h3 class="m-t-3"><span class="step">2</span> Apellido:  <input type="text" name="Apellido" value="" /></h3>
 
  <h3 class="m-t-3"><span class="step">3</span> Mensaje:  <input type="text" name="Mensaje" value="" /></h3>
  <input type="submit" value="Enviar" />

  </form>

 <?php
include_once ("footer.php");
?>

</body>
</html>