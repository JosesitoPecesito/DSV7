<!DOCTYPE html>
<html>
<head>
    <title>Laboratorio 2.7</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        $posicion = "arriba";

        switch($posicion){

            case "arriba":
                echo "la variable contiene";
                echo " el valor arriba";
                break;
            
            case "abajo":
                echo "la variable contiene";
                echo " el valor abajo";
                break;
            
            default:
            echo "la variable contiene otro valor";
            echo " distinto de arriba y abajo";
        }
    ?>
</body>
</html>