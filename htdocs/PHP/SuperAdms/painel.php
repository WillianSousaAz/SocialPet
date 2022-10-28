<?php 
    require_once 'validar_adm.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/painel.css">
    <link rel="icon" type="image/png" href="../../img/icon.ico"/>
    <title>Painel - Administrativo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ac19272455.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="painel">

        <?php require_once ('recursos/menu.php'); ?>

        <div class="central-caixas">
            <div class="caixas-home">
                <a class="caixa-home" href="consultar.php">
                    <img src="img/consulta.png" class="emoji">
                    Consultar Adm
                </a>         
                <a class="caixa-home" href="adicionar.php">
                    <img src="img/add.png" class="emoji">
                    Adicionar Adm
                </a>
                <a class="caixa-home" href="remover.php">
                    <img src="img/eliminar.png" class="emoji">
                    Remover Adm
                </a>  
                <div class="caixa-home">
                    <img src="img/locked.png" class="emoji">
                    Desbloquear area Secreta
                </div>
            </div>
        </div>

        <?php require_once ('recursos/button.php'); ?>
    </div>
</body>
</html>