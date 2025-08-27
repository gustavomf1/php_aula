<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['nome']) && isset( $_POST['idade'])){
            $nome = trim($_POST['nome']);
            $idade = $_POST['idade'];
            $mensagem = "Bem vindo, $nome!";

            if($idade < 18){
                $mensagem .= " Você é menor de idade";
            }else{
                $mensagem .= " Você é maior de idade";
            }
        }
    }
?>

<!DOCTYPE>
<html>
    <head></head>
    <body>
        <form method="POST">
            <label>Nome</label>
            <input type="text" name="nome" required>
            <br/>

            <label>Idade</label>
            <input type="number" name="idade" required>
            <br/>

            <button type="submit">Enviar</button>
        </form>

        <?php
            echo isset($mensagem) ? $mensagem : "" ;
        ?>

    </body>
</html>