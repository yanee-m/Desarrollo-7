<html>
  <head>
    <title>Laboratorio 2.4</title>
  </head>
  <body>
    <?php
    //Creación del Arreglo array("clave" => "valor")
    $personas = array("Juan" => "Panama",
                      "John" => "USA",
                      "Eica" => "Finlandia",
                      "Kusanagi" => "Japon");
                  
    //Recorrer todo el Arreglo
    foreach($personas as $persona => $pais) {
      print "$persona es de $pais <br>";
    } 

    //Impresión Especifica
    echo "<br>".$personas["Juan"];
    echo "<br>".$personas["Eica"];
      ?>
  </body>
</html>