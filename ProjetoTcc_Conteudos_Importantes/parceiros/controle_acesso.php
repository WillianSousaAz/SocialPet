<?php
    session_start();
    $acao = 'validar';
    $parceiro_autenticado = false;
    require 'controle_de_parceiros.php';
    echo "<pre>";
    print_r($usuarios['Email']);
    echo "</pre>";

?>