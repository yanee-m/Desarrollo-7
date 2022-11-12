<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Laboratorio 9.1</title>
    <link rel="stylesheet" href="css/estilo.css">
  </head>
  <body>
    <h1>Consulta de noticias</h1>

    <?php

      require_once("class/noticias.php");

      $obj_noticia = new noticia();
      $noticias = $obj_noticia->consultar_noticias();

      $nfilas = count($noticias);

      if($nfilas > 0) {
        print ("<TABLE>\n");
        print ("<TR>\n");
        print ("<TH>Titulo</TH>\n");
        print ("<TH>Texto</TH>\n");
        print ("<TH>Categoria</TH>\n");
        print ("<TH>Fecha</TH>\n");
        print ("<TH>Imagen</TH>\n");
        print ("</TR>\n");

        foreach ($noticias as $resultado) {
          print ("</TR>\n");
          print ("<TD>" . $resultado['titulo'] . "</TD>\n");
          print ("<TD>" . $resultado['texto'] . "</TD>\n");
          print ("<TD>" . $resultado['categoria'] . "</TD>\n");
          print ("<TD>" . date("j/n/y",strtotime($resultado['fecha'])) ."</TD>\n");

          if($resultado['imagen'] != "") {
            print ("<TD><A TARGET='_blank' HREF='img/" . $resultado['imagen'] .
            "'><IMG BORDER='0' SRC='img/iconotexto.gif'></A></TD>\n");
          }else {
            print ("<TD>&nbsp;</TD>\n");
          }
          print ("</TR>\n");
        }
        print ("</TABLE>\n");
      }
      else {
        print ("No hay noticias disponibles");
      }
    ?>

  </body>
</html>