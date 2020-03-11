<?php


$pizzaHawaiana = $_POST["pizzaHawaiana"];
$pizzaChampiñones = $_POST["pizzaChampiñones"];
$pizzaPollo = $_POST["pizzaPollo"];
$pizzaCarne =$_POST["pizzaCarne"];
$mixta  =$_POST["mixta"];
$valor1  =$_POST["valor1"];
$valor2  =$_POST["valor2"];
$valor3  =$_POST["valor3"];
$valor4  =$_POST["valor4"];
$valor5  =$_POST["valor5"];
 
echo "USTED COMPRO: " ."<br>";

if (isset($_REQUEST['pizzaHawaiana'])) {
    echo "pizzaHawaiana " .$valor1 ."<br>";
  $total =$valor1* 5600;
  echo "el valor es:" .$total ."<br>";
}else{
    $valor1 =0;
}
if (isset($_REQUEST['pizzaPollo'])) {
    echo "pizzaPollo " .$valor2 ."<br>";
    $total1 =$valor2* 5600;
    echo "el valor es:" .$total1 ."<br>";
  }else{
    $valor2 =0;
  }
  if (isset($_REQUEST['pizzaChampiñones'])) {
    echo "pizzaChampiñones " .$valor3 ."<br>";
    $total2 =$valor3* 5600;
    echo "el valor es:" .$total2 ."<br>";
  }else{
    $valor3 =0;
  }
  if (isset($_REQUEST['pizzaCarne'])) {
    echo "pizzaChampiñones " .$valor4 ."<br>";
    $total3 =$valor4* 5600;
    echo "el valor es:" .$total3 ."<br>";
  } else{
    $valor4 =0;
  }
  if (isset($_REQUEST['mixta'])) {
    echo "pizzaChampiñones " .$valor5 ."<br>";
    $total4 =$valor5* 5600;
    echo "el valor es:" .$total4 ."<br>";
  }else{
    $valor5 =0;
  }

  $valorTotal = $total+$total1+$total2+$total3+$total4;
  echo "el valor total del pedido es: " .$valorTotal;
  

 
  ?>