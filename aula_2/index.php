<?php
/*
$nome = "Gustavo";
$idade = 22;
$cidade = "Pirapozinho";
echo "$nome tem $idade anos e moro em $cidade";
*/
?>

<?php
//$frase = "O Santos é pika!";
//echo str_word_count($frase);

//echo strtoupper($frase);
//echo strtolower($frase);

?>

<?php
    /*$numero = 2;
    $numero2 = 2;
    echo $numero + $numero2 . "\n";
    echo $numero - $numero2 . "\n";
    echo $numero / $numero2 . "\n";
    echo $numero * $numero2 . "\n";
    */
?>

<?php
    /*
    $numero = 7;
    if($numero % 2 === 0){
        echo "PAR!";
    }else{
        echo "IMPAR!";
    }
    
    
    $idade = 20;
    echo ($idade >= 18) ? "Maior de idade" : "Menor de idade";
    
    $variavelbool = "a";
    
    echo (!!$variavelbool) ?"AAAAAAAAAAAAAAAA":"HELLO";
    */
?>

<?php
/*
    $nomes = ["Gustavo", "Zé", "Teste"];
    $nomes[] = "Loucura";
    array_push($nomes,"TOME");

    unset($nomes[2]);
    
    //print_r($nomes);

    $nomes = array_values($nomes);
    print_r($nomes);
    sort($nomes);
    
    print_r($nomes);

    rsort($nomes);
    print_r($nomes);

    
    print_r($nomes[3]);
    */
?>


<?php
    print("for normal!" . "<br/>");
    for ($i = 0; $i < 10; $i++) {
        echo $i . "<br/>";
    }

    print("for each!" . "<br/>");
    $nomes = ["Gustavo", "Zé", "Teste"];
    foreach ($nomes as $n){
        echo $n ."<br/>";
    }

    $novos_nomes = array_map(function($n){
        return "Olá $n";
    }, $nomes);

    print_r($novos_nomes);
    print("<br/>");
?>

<?php
    $nomes_filtrado = array_filter($nomes, function($n) {
        return strtolower($n) === "gustavo";
    });

    print_r($nomes_filtrado);
?>