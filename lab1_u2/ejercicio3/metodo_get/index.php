<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" href="../CSS/estilo.css">
<head>
<meta charset="utf-8">
</head>
<body>
    <!-- se pide el tamaño de la tabla ademas del color de las filas impares -->
    <form action="index.php" method="GET">
        <input type="number"  min = 1 placeholder="Inserta tamaño de la tabla" name="TAM"><br><br>             
        <input type="color" name ="color"><br><br>
        <input type="submit" value="Crear Tabla">
    </form>
    <br>
<?php
    // se les asigna una varible a el tamaño y al color
    $TAM = $_GET['TAM'];
    $color = $_GET['color'];
    echo "<table border=1>"; 
    $contador=1;
    for ($n=1; $n<=$TAM; $n++){
        if ($n % 2 == 0)
        // se les da el color a las lineas pares
        echo "<tr bgcolor=$color>";
        else
        echo "<tr>"; 
        for ($j=1; $j<=$TAM; $j++){
            // se llena la tabla//
            echo "<td>", $contador, "</td>";
            $contador=$contador+1;
        }
        echo "</tr>";
    }
    echo "</table>";
?>
</body>
</html>