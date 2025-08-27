<?php
$soma = 0;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numeros = [
        (int)($_POST['numero1'] ?? 0),
        (int)($_POST['numero2'] ?? 0),
        (int)($_POST['numero3'] ?? 0)
    ];
    
    foreach ($numeros as $n){
        $soma += $n;        
    }
    }

    
?>

<!DOCTYPE>
<html>
    <head>

    </head>
    <body>
        <form method="POST">
            <label>Numero 1</label>
            <input type="number" name="numero1">
            <br>

            <label>Numero 2</label>
            <input type="number" name="numero2">
            <br>

            <label>Numero 3</label>
            <input type="number" name="numero3">
            <br>

            <button type="submit">Somar</button>
        </form>

        <?php
            echo isset($soma) ? $soma . "<br/>" : "" ;

            if($soma %2 === 0){
                echo "Par";
            }else{
                echo "Impar";
            }
        ?>

    </body>
</html>