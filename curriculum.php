<!-- En esta seccion se recibiria los datos pero github no complia php
Por lo que lo datos que muestran va estar pre cargados -->  

<?php

$nombre=$_POST['nombre']; 
$apellido=$_POST['apellido'];
$domicilio=$_POST['domicilio'];
$tel=$_POST['tel'];
$mail=$_POST['Email'];
$fnac=$_POST['fnac'];
$expe=$_POST['comentario'];
$formacion=$_POST['txtDescripcion'];
$foto=$_POST['imagen1'];
?>

ESTO ESTA EN COMENTARIO PORQUE NO SE PUEDE UTILIZAR PHP AL FINAL ESTA EL CODIGO QUE SE MUESTRA

<!-- 
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
    <u><h2>Formacion Profesional</h2></u>
    <?php echo $comentario?>
  </div>
  <br><br>
  <div class="column side">

    <img src="img/afa.jfif" alt="foto" style="width:128px;height:128px;">
  </div>
</div>

</body>
</html>
--> 

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
   <b> Nombres y Apellidos:</b><br>
    <p>JOSE CHAVEZ</p>
    <b><p>Domicilio:</p></b>
    <P>Ciudad Del MIlagro</P>
    <b><p>Telefono: </p></b>
    <p>+54 387 4555666</p>
    <b><p>Email: </p></b>
    <p>EstoEsUnEjemplo@gmail.com</p>
    <br>
  </div>
  
  <div class="column middle">
  <u><h2>Esperiencia Laboral</h2></u>
    <p>3 años como jefe de cocina restaurante </p>
    <p>2 años como jefe de cocina restaurante </p>
    <p>1 años como jefe de cocina restaurante </p>
    </br> </br>
    <u><h2>Formaicon Profesional</h2></u>
    <p>Este es un ejemplo una vez enviado el formulario quedaria de esta forma</p>
    <p>Agradezco todo lo aprendido</p>
  </div>
  <br><br>
  <div class="column side">

    <img src="img/afa.jfif" alt="foto" style="width:128px;height:128px;">
  </div>
</div>

</body>
</html>
