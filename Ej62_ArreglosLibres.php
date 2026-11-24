<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <title>Registro de productos</title>
</head>
<body>
 <h2></h2>
 <!-- Formulario de captura -->
 <form method="POST" action="">
     <label>¿Te gustaria conocer el nombre de las canciones
     del album *Un verano Sin Ti*(si/no)?</label><br><br>
     <input type="text" name="respuesta" placeholder="(si/no)"><br><br>

     <button type="submit" name="consultar" value="consultar">Enviar</button>
</form>
<?php
if (isset($_POST['consultar'])){
     $respuesta= strtolower(trim($_POST['respuesta']));

     $canciones= array(
         "1. Moscow Mule",
         "1. Titi me pregunto",
         "1. Me porto bonito",
         "1. Agosto",
         "1. Ojitos Lindos",
     );

     if ($respuesta=="si"){
     	echo "<h3>¡Aqui tienes las canciones del album!</h3>";
     	echo "<table border='1' cellpadding='5'>";
     	echo "<tr><th>Canciones</th></tr>";

     	for ($i=0; $i<count($canciones); $i++){
     		echo "<tr><td>" . $canciones[$i] . "</td></tr>";
     	}
     	echo "</table>";

     } elseif ($respuesta=="no"){
     	echo "<h3>De acuerdo, no se mostrara nada</h3>";
     } else {
     	echo "<p style='color: red;'><b>Error:</b> Por favor escribe 'si' o 'no'.</p>";}
}
?>
</body>
</html>

 