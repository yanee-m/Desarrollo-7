<?php

if($_REQUEST['num'] <=0) {
    echo "Debes Ingresar un Número Mayor a 0.";
  }
  else{

$factorial = $_POST['num'];

$fact=1;

for($i=1;$i<=$factorial;$i++){
  $fact=$fact * $i;
}

    echo "<br/> El Factorial de ". $factorial. " es =  " . $fact;
}
?> 