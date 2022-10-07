<?php
if (array_key_exists("send", $_POST) ) {

$num = $_POST["num"];

    $k = round($num / 2 ) - 1;

        if($num % 2 == 0){
            echo"No Ingresar Números Pares";
        }else{
            echo "<table border=1>";
            
            for ($i = 0; $i < $num ; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $num; $j++) {
                    
                    if ($i == $k || $j == $k )  {
                        echo "<td>", $randomnumber= rand(1,100), "</td>";
                    } else {
                        echo "<td>", 0, "</td>" ;
                    }
                }
                echo "</tr>";

            } echo "</table>";

        }
}
?>