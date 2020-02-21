<?php

$edad = $_POST["edad"];
$hora = $_POST["hora"];
$estudios = $_POST["estudios"];
$mensaje = $_POST["mensaje"];

if ($edad <= 10) {
    echo " usted es un niño";
} elseif ($edad >= 10 && $edad  <= 18) {
    echo "usted es un adolescente";
} elseif ($edad > 19 && $edad <= 50) {
    echo "usted es un adulto";
} else {
    echo "usted es un adulto mayor" . "<br>";
}

echo "<br> <br>";
if ($hora < "11") {
    echo "Buenos días";
} elseif ($hora < "15") {
    echo "Es medio día";
} elseif ($hora < "18") {
    echo "Buenas tardes";
} else {
    echo "Buenas noches";
}

echo "<br><br>";

echo "Su nivel de escolaridad es: ". $estudios ."<br> <br>"; 
echo "usted ingreso el mensaje : ". $mensaje;
 

