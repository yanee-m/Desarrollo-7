<html>
  <head>
    <title>Laboratorio 2.5</title>
  </head>
  <body>
    <?php
    $figuras = array('Cuadrado', 'Triangulo', 'Circulo');
    
    $figuras[1] = 'Rectangulo';
    mostrar_figuras($figuras, "Asignación de Rectangulo");

    array_push($figuras, 'Pentagono');
    mostrar_figuras($figuras, "Adición de Pentagono al Final");

    array_unshift($figuras, 'Hexagono');
    mostrar_figuras($figuras, "Adición de Hexagono al Inicio");

    array_pop($figuras);
    mostrar_figuras($figuras, "Eliminación del Ultimo");

    array_shift($figuras);
    mostrar_figuras($figuras, "Eliminación del Primero");

    function mostrar_figuras($figuras, $mensaje){
      echo "<br>Arreglo despues de $mensaje<br>";
      foreach ($figuras as $figura){
        echo "$figura <br>";
      }
    }
    ?>
  </body>
</html>