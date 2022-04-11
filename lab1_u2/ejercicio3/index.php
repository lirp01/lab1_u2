<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" href="CSS/estilo.css">
<head>
<meta charset="utf-8">
</head>
<body>
    <form action="ejercicio3.php" method="GET">
        <input type="number"  min = 1 placeholder="Inserta tamaño de la tabla" name="TAM"><br><br>             
        <input type="color" name ="color"><br><br>
        <input type="submit" value="Crear Tabla">
    </form>
    <br>
<?php
    $TAM = $_GET['TAM'];
    $color = $_GET['color'];
    echo "<table border=1>"; 
    $contador=1;
    for ($n=1; $n<=$TAM; $n++){
        if ($n % 2 == 0)
        echo "<tr bgcolor=$color>";
        else
        echo "<tr>"; 
        for ($j=1; $j<=$TAM; $j++){
            echo "<td>", $contador, "</td>";
            $contador=$contador+1;
        }
        echo "</tr>";
    }
    echo "</table>";
?>
</body>
</html>