<!DOCTYPE html>
<html>
<head>
    <title>Laboratorio 2.10</title>
    <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8">
</head>
<body>
<?php
$persona = array(
    array("nombre" => "Rosa", "estatura" => 168, "sexo" => "F"),
    array("nombre" => "Ignacio", "estatura" => 175, "sexo" => "M"),
    array("nombre" => "Daniel", "estatura" => 172, "sexo" => "M"),
    array("nombre" => "Ruben", "estatura" => 182, "sexo" => "M"),

);

echo "<p>Datos sobre el personal <b><br><hr>";

$numPersonas= count($persona);
for($i=0; $i < $numPersonas; $i++){

    echo"Nombre: <b>", $persona[$i]['nombre'], "</b><br>";
    echo"Estatura: <b>",$persona[$i]['estatura'],"</b><br>";
    echo"Sexo: <b>", $persona[$i]['sexo'],"</b><br><hr>";
}
?>
</body>
</html>