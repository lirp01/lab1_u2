<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" href="CSS/estilo.css">
<head>
<meta charset="utf-8">
</head>
<body>
<?php
    /* se define el tamaño*/
    define('TAM',100); 
    echo "<table border=1>";
    /* se crea el contador para rellenar la tabla*/
    $contador=1;
    for ($n=1; $n<=TAM; $n++){
        if ($n % 2 == 0)
        /* se le define el color a las lineas pares*/ 
        echo "<tr bgcolor=#bdc3d6>";
        else
        echo "<tr>";
        /* se llena la tabla */ 
        for ($j=1; $j<=TAM; $j++){
            echo "<td>", $contador, "</td>"; 
            $contador=$contador+1; 
        }
        echo "</tr>";
    }
    echo "</table>"; 
?>
</body>
</html>