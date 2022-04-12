<!DOCTYPE html>
<link rel="stylesheet" href="CSS/estilo.css">
<html class="no-js" lang="es">
  <head></head>
  <body>
  <table border="2">
  <tr>
  <?php
    // se crea una varible de ruta mas un contador
    $contador = 0;
    $ruta = "fotos/";
    // se abre la cartepa de archivos
    $filehandle = opendir($ruta);
    // se recorren los archivos y se inserta la imagen
    while ($file = readdir($filehandle)) {
        if ($file != "." && $file != "..") {
            ?>
            <Td><img src=<?php echo $ruta.$file ?> width="300px"></Td>
            <?php
            $contador = $contador + 1;
        // si el contador llega a multiplos de 4 se termina la fila y pasa a otra columna
        if($contador%4 == 0){
                echo('</tr>');
            }
        } 
    }
    // se cierra la carpeta de archivos
    closedir($filehandle);
  ?>
  </table>
  </body>
 </html>