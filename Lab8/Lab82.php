<?php
include('class_lib.php');
$num = $_POST['num'];
$max = max($num);
$mayor = new Mayor($num, $max);
$resul = $mayor->mostrar_mayor();

?>

<title> Laboratorio 8.2 </title>
<form method='post' action='Index_Lab82.php'>
  <input type='submit' name='' value='Inicio'>
</form>