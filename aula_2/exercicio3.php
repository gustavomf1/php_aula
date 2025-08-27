<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $lista = [
        ($_POST['fruta1'] ?? ""),
        ($_POST['fruta2'] ?? ""),
        ($_POST['fruta3'] ?? "")
    ];
    }

    
?>

<!DOCTYPE>
<html>
    <head>

    </head>
    <body>
        <form method="POST">
            <label>Fruta 1</label>
            <input type="text" name="fruta1">
            <br>

            <label>Fruta 2</label>
            <input type="text" name="fruta2">
            <br>

            <label>Fruta 3</label>
            <input type="text" name="fruta3">
            <br>

            <button type="submit">Listar</button>
        </form>

        <?php
        if (isset($lista)){
            foreach ($lista as $n){
               echo "$n" . "<br/>";
            }
        }
        
        ?>

    </body>
</html>