<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laboratorio 4.3</title>
</head>
<body>
    <?php
    if(array_key_exists("enviar",$_POST))
    {
        $cant = $_POST['num'];
        $arreglo = array();
        
        while (sizeof($arreglo ) != $cant) {
            array_push($arreglo , random_int(1, 100));
            array_unique($arreglo , SORT_NATURAL);
        }

        foreach ($arreglo  as $e) {
            echo $e . ' ';
        }

    for ($i=1; $i <= sizeof($arreglo ) ; $i++) { 
        if($arreglo [($i-1)] == max($arreglo )){
            echo '<br><br>El Valor Mayor Dentro del Arreglo es '.max($arreglo ). ' y se Encuentra en la Posición '.$i;
        }
    }  
}
    else{
    ?>      
        <form action="Lab43.php" method="POST">
            Ingrese la Cantidad de Números Dentro de su Arreglo: <input type="text" name="num"><br>
            <input type="submit" name="enviar" value="Enviar">
        </form>
        <?php 
    }?>
</body>
</html>