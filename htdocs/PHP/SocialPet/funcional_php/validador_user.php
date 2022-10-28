<?php

  if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM'){
    header('Location: ../paginas_usuario/login.php?login=erro2');
  }

?>