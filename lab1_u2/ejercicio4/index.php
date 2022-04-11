<!DOCTYPE html>
<link rel="stylesheet" href="CSS/estilo.css">
<html class="no-js" lang="es">
  <head></head>
  <body>
  <table border="2">
  <tr>
  <?php
  $contador = 0;
        $ruta = "fotos/";
        $filehandle = opendir($ruta);
        while ($file = readdir($filehandle)) {
            if ($file != "." && $file != "..") {
            $tamanyo = GetImageSize($ruta . $file);
            ?>
                <Td><img src=<?php echo $ruta.$file ?> width="300px"></Td>
                <?php
            } 
        }

        closedir($filehandle);
  ?>
  </tr>
  </table>
  </body>
 </html>