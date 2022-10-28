<?php

    session_start();

    //echo '<pre>';
    //print_r($_SESSION);
    //echo '</pre>';

    //Remover indixes do array de sessão
    //unset($_SESSION['id']);

    //Deustruir a variavel sessão
    //session_destroy()

    session_destroy();
    header('Location: ../paginas_usuario/index.php')

?>