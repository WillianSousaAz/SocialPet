<?php

  session_start();
  if(!isset($_SESSION['super_adm']) || $_SESSION['super_adm'] != 'SIM'){
    header('Location: ../ProjetoTcc/paginas_usuario/login.php?login=erro2');
  }

?>