<?php 
    $acao = 'recuperar';
    require 'controle_adm.php';
    require_once 'validar_adm.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" type="image/png" href="../../img/icon.ico"/>
    <title>Painel - Administrativo</title>
    <link rel="stylesheet" href="css/painel.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ac19272455.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        function remover(id){
            location.href = 'remover.php?acao=remover&id='+id;
        }
    </script>
</head>
<body>
    <div class="painel">

        <?php require_once ('recursos/menu.php'); ?>

        <div class="central">
            <div class="card_box">
                <div class="name_bar">
                    <div class="control_id control">Id</div>
                    <div class="control">Nome</div>
                    <div class="control">Email</div>
                    <div class="control">Remover</div>
                </div>
                <div class="content">
                    <?php foreach($adms as $indice => $adm) { ?>
                        <div class="contudo_repeat">
                            <div class="control_id control_text"><?= $adm->ID_ADM?></div>
                            <div class="control_text"><?= $adm->NomeFuncionario?></div>
                            <div class="control_text"><?= $adm->Email?></div>
                            <div class="control_text remove" data-bs-toggle="modal" data-bs-target="#detalhes<?= $adm->ID_ADM?>" ><i class="fa-solid fa-ban"></i></div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php require_once ('recursos/button.php'); ?>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="detalhes<?= $adm->ID_ADM?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Remover <?= $adm->NomeFuncionario?> ?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Deseja realmente remover <?= $adm->NomeFuncionario?>, essa ação não tem retorno.
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-danger" onclick="remover(<?= $adm->ID_ADM?>)">Remover</button>
        </div>
        </div>
    </div>
    </div>
</body>
</html>