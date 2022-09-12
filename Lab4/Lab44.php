<?php
    if (array_key_exists('enviar', $_POST)) {
        print "<form action='Lab44.php' method='post'>";
        print "<P>Ingrese " . $_POST['num'] . " Números Pares</P>";

        for ($i = 0; $i < $_POST['num']; $i++) {
            echo "</br>";
            print "<p></P><input type='number' name='val$i'>";
        }

        echo "</br>", "</br>";
        print "<button type='submit' name='valores'>Enviar</button>";
        print "</form>";
    } else if (array_key_exists('valores', $_POST)) {
        echo "Números Ingresados";
        foreach ($_POST as $key) {
            if ((intval($key) % 2) == 0) {
                echo "</br>";
                print $key;
            } else {
                header("location:Lab44.html");
            }
        }
    }
    ?>