<!DOCTYPE html>
<link rel="stylesheet" href="CSS/estilo.css">
<html class="no-js" lang="es">
<head></head>
<body>
<b>TABLA 10x10</b>
<table border="2">
  <?php
    /* creacion de la tabla*/
    echo ("</tr>\n");
    // se crea una tabla para llenar la tabla
    $contador = 1;
    for ($x = 1;$x <= 10; $x++ ) {
      for ($y = 1;$y <= 10; $y++ ) {
        // se llena la tabla
        echo ("<td>"); 
        echo $contador;
        echo ("</td>"); 
        $contador = $contador + 1;
      }
    echo ("</tr>\n");
    }
  ?>
  </table>
  </body>
 </html>