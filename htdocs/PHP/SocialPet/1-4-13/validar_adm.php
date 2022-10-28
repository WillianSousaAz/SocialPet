<?php

  session_start();
  if(!isset($_SESSION['adm']) || $_SESSION['adm'] != 'SIM'){
    header('Location: ../paginas_usuario/login.php?login=erro2');
  }

?>