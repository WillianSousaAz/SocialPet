<?php

  session_start();
  if(!isset($_SESSION['parceiro']) || $_SESSION['parceiro'] != 'SIM'){
    header('Location: index.php?login=erro2');
  }

?>