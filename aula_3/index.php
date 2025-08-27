<?php

    function saudacao($nome, $periodo){
        return "Bom $periodo, $nome!";
    }

    function saudacaoComTipagem(string $nome, string $periodo){
        return "Bom $periodo, $nome!";
    }

    function saudacaoComParametrosSemValores(string $nome, string $periodo = "dia"){
        return "Bom $periodo, $nome!";
    }

    //echo saudacao(1, 2 . "<br>");
    //echo saudacaoComTipagem(1, 2 . "<br>");
    //echo saudacaoComParametrosSemValores("Gustavin");
?>

<?php
    $array = [1, 2, 3];

    function soma(int $n1, int $n2, int $n3){
        return $n1 + $n2 + $n3;
    }

    //echo soma($array[0], $array[1], $array[2]);
    
    //echo soma(...$array);

    function somaEspelhamento(...$array){
        if(empty($array)){
            return 0;
        }else{
            return array_sum($array);
        }
    }

    //echo somaEspelhamento(1, 2, 3, 4);
?>

<?php
    function ehPalindroma(string $palavra){
        $palavra = strtolower($palavra);
        $palavra = preg_replace('/[^a-z]/', '', $palavra);
        return $palavra === strrev($palavra);
    }
    
    //$resultado = ehPalindroma("SUBINOONIBU");
    //echo $resultado ? "é palindroma" : "não é palindroma";
     
?>

<?php
    //$conteudo = file_get_contents("mensagem.txt");
    //echo $conteudo;

    //$linha = date('Y-m-d H:i:s') . " - Acesso registrado\n";
    //file_put_contents("logs.txt", $linha, FILE_APPEND);
    //echo "Acesso registrado!";
?>

<?php
    $caminho = __DIR__ . "/clientes.csv";

    if(!file_exists($caminho)){
        echo "O arquivo não existe!";
    }

    $handle = fopen($caminho, "r");

    if($handle){
        $cabecalho = fgetcsv($handle, 0, ",", '"', "\\");
        while (($dados = fgetcsv($handle, 0, ",", '"', "\\")) !== false){
            echo "nome $dados[0] - email: $dados[1] - idade: $dados[2] <br/>";                
        }

        fclose($handle);
    }
?>