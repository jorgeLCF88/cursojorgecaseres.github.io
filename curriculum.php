<?php

$nombre=$_POST['nombre']; 
$apellido=$_POST['apellido'];
$domicilio=$_POST['domicilio'];
$tel=$_POST['tel'];
$mail=$_POST['Email'];
$fnac=$_POST['fnac'];
$expe=$_POST['comentario'];
$comentario=$_POST['txtDescripcion'];
$foto=$_POST['imagen1'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/style2.css" />

</head>
<body>
<div class="header">
  <h1>CURRICULUM VITAE</h1>
  
</div>

<div class="topnav">
  <a href="#"></a>
  <a href="#"></a>
  <a href="#"></a>
</div>

<div class="row">
  <div class="column side">
<u><h2>Datos Personales</h2></u>
    <br>
   <b> Nombres y Apellidos:</b><br><br>
    <?php echo $nombre." ".$apellido?>
    <b><p>Domicilio:</p></b>
    <?php print $domicilio?>
    <b><p>Telefono: </p></b>
    <?php print $tel?>
    <b><p>Email: </p></b>
    <?php print $mail?>
    <br>
  </div>
  
  <div class="column middle">
  <u><h2>Esperiencia Laboral</h2></u>
    <?php echo $expe?>
    </br> </br>
    <u><h2>Expectativa Laboral</h2></u>
    <?php echo $comentario?>
  </div>
  <br><br>
  <div class="column side">

    <img src="img/afa.jfif" alt="foto" style="width:128px;height:128px;">
  </div>
</div>

</body>
</html>
