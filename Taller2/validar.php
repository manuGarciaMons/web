<?php
 $nombre = $_POST["nombre"];
 $genero = $_POST["genero"];

 if ($genero == "F") {
   echo "usted" . $nombre . "tiene genero femenimo";
 } else {
    echo "usted" . $nombre."tiene genero masculino" ;
 }

?>