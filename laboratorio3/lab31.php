<?php
$diametro = $_POST['diam'];
$altura = $_POST['alt'];
$radio = $diametro/2;
$Pi = 3.14;
$volumen = $Pi * ($radio*2)*$altura;

echo "<br/> El volumen del cilindro es de ". $volumen." metros cubicos";
?>