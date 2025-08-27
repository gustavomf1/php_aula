<?php
    //definindo caminho do arquivo
    $arquivo = __DIR__ . "/anuncios.json";
    //buscar o conteúdo do arquivo
    $conteudo = file_get_contents($arquivo);

    $anuncios = json_decode($conteudo, true);
?>

<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="row">
            <?php
                foreach($anuncios as $anuncio){ ?>

                <div class="card col">
                    <h5><?= $anuncio['nome'] ?></h5>
                    <p>R$ <?= 
                            number_format($anuncio['preco'], 2, ",", ".")
                        ?>
                    </p>
                </div>
            <?php } ?>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>