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

</head>
<body>
    <div class="painel">

        <?php include_once ('recursos/menu.php'); ?>

        <div class="central_box">
            <div class="card_box_adm">
                <div class="title_card">
                    <h1>Adicionar Adm</h1>
                </div>
                <form action="controle_adm.php?acao=inserir" method="POST" class="form_adm">
                    <div class="adm_form">
                        <div class="input_box">
                            <label>Nome</label>
                            <input name="nome" type="text" required>
                        </div>
                        <div class="input_box">
                            <label>Nivel</label>
                            <select id="admsuper" name="admsuper" required>
                                <option value=""></option>
                                <option value="NAO">Comum</option>
                                <option value="SIM">Super</option>
                            </select>
                        </div>
                    </div>
                    <div class="adm_form">
                        <div class="input_box">
                            <label>E-mail</label>
                            <input name="email" type="email" required>
                        </div>
                        <div class="input_box">
                            <label>Senha</label>
                            <input name="senha" minlength="8" type="password">
                        </div>
                    </div>
                    <input class="btn-adm" type="submit" value="Adicionar">
                </form>
            </div>
        </div>

        <?php include_once ('recursos/button.php'); ?>
    </div>
</body>
</html>