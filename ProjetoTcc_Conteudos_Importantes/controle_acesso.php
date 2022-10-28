<?php
    session_start();
    $acao = 'validar';
    $usuario_autenticado = false;
    require 'controle_de_cadastro.php';
    echo "<pre>";
    print_r($usuarios['Email']);
    echo "</pre>";

?>