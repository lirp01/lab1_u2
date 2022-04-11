<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="utf-8">
</head>
<body>
<?php
    define('TAM',100); 
    echo "<table border=1>"; 
    $contador=1;
    for ($n=1; $n<=TAM; $n++){
        if ($n % 2 == 0) 
        echo "<tr bgcolor=#bdc3d6>";
        else
        echo "<tr>"; 
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