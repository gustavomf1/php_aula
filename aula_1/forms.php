<?php

?>

<!DOCTYPE>
<html>
    <head><h1>FORMS</h1></head>
    <body>
        <form>
            <label>Number 1</label>
            <input type="number" name="number1">
            <br>

            <label>Number 2</label>
            <input type="number" name="number2">
            <br>
            
            <button>Somar</button>
        </form>
    </body>
</html>


<?php
    if(isset($_GET['number1']) && $_GET['number2']) {
        $number1 = $_GET["number1"];
        $number2 = $_GET["number2"];

        $soma = $number1 + $number2;
        echo $soma;
    }

?>