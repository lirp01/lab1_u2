<!DOCTYPE html>
<html class="no-js" lang="es">
  <head></head>
  <body>
  <b>TABLA 10x10</b>
  <table border="2">
  <?php
  echo ("</tr>\n");
  $contador = 1;
  for ($x = 1;$x <= 10; $x++ ) {
    for ($y = 1;$y <= 10; $y++ ) {
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