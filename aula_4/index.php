<?php
    session_start();

    $contador = 0;
    $contador += 1;

    $_SESSION["contador"] = ($_SESSION["contador"] ?? 0) + 1;

    echo $_SESSION["contador"];


    $_SESSION = [];
    session_destroy();

    setcookie("teste", "valor", time()+60);

    $value = $_COOKIE["teste"];

    echo $value;
?>