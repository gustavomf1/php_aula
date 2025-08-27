<?php
    if($_FILES['arquivo']['error'] == UPLOAD_ERR_OK){
        $destino = "uploads/" . basename($_FILES['arquivo']['name']);

        move_uploaded_file($_FILES['arquivo']['tmp_name'],
        $destino    
    );
    echo "O arquivo foi salvo com sucesso";
    }else{
        echo "Erro no arquivo!";
    }
?>
