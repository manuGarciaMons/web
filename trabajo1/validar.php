<?php


$ano =$_POST["anio"];
$mes =$_POST["mes"];
$dia =$_POST["dia"];


$ano_diferencia  = date("Y") - $ano;
$mes_diferencia = date("m") - $mes;
$dia_diferencia   = date("d") - $dia;

if ($mes_diferencia < 0)
{
    --$ano_diferencia;
    $mes_diferencia=$mes_diferencia + 12;
} 

if ($dia_diferencia < 0)
{
    --$ano_diferencia;
    $dia_diferencia=$dia_diferencia + 30;
} 


echo "la fecha actual es " . date("d") . " del " . date("m") . " de " . date("Y"). "<br>";

echo "Usted nació el ". $dia ." del mes ". $mes . " del " . $ano ,"<br>"; 

echo "Usted tiene : " .$ano_diferencia. " años"."<br>";

echo "Usted tiene : " .$mes_diferencia. " meses"."<br>";

echo "Usted tiene : " .$dia_diferencia. " dias"."<br>";



?>