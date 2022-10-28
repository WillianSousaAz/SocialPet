<?php
session_start();
$acao = "recuperar";
require_once('../funcional_php/parceiro.php');
$cidade = isset($_GET['cidade']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parceiro - Socialpet</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style_parceiro.css">
    <script src="https://kit.fontawesome.com/ac19272455.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="../img/icon.ico" />
    <script src="../script/cep_filtro.js"></script>
</head>

<body>

    <?php
    //Menu
    include_once("../incorporar_dados/globais/menu.php");
    ?>

    <div class="titulo_bg">

        <h1>Nossos Parceiros</h1>
    </div>

    <div class="filtro_regiao filtro filtro_mobile">
        <div class="titulo_regiao">Filtre por um CEP</div>
        <div class="div_regiao">
            <form action="parceiro.php" class="parceiro_regiao" method="GET">
                <input type="text" class="cep" placeholder="Digite seu CEP ex: xxxxxxxx" pattern="[0-9]+$" id="cep" maxlength="8" minlength="8" onblur="return pesquisarcep()" required>
                <input type="text" class="cep" placeholder="Campo Automático" minlength="2" id="cidade" name="cidade" required>
                <input type="submit" value="Filtrar" class="enviar_estado btn_mobile">
            </form>
        </div>
    </div>

    <?php

    if ($cidade == false) {

    ?>
        <div class="aviso_cep">
            <p> Digite um CEP para conferir as Lojas </p>
        </div>
        <?php

    } else {
        if ($todos == null) {
        ?>
            <div class="aviso_cep">
                <p> Nenhuma loja localizada 😔</p>
            </div>

        <?php
        } else { ?>

            <?php $total = 0; ?>
            <div class="box_parceiro box_premium">
                <h2>A Socialpet Recomenda :</h2>
                <div class="controle_box_petshop">
                    <?php foreach ($premium as $indice => $premium) { ?>
                        <a href="parceiro_pagina.php?id=<?= $premium->id ?>">
                            <div class="caixa_petshop">
                                <div class="img_petshop">
                                    <img src="<?= $premium->Logo ?>" alt="" />
                                </div>
                                <div class="info_petshop" style="background: <?= $premium->cor ?>">
                                    <div class="nome_petshop">
                                        <h3><?= $premium->NomeEmpresa ?></h3>
                                    </div>
                                    <div class="desc_petshop">
                                        <p><?= $premium->FuncoesDaLoja ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php $total = $total + 1; ?>
                        </a>
                    <?php }
                    ?>

                    <?php
                    if ($total > 7) {
                    ?>
                        <div class="barra_extra">
                            <div class="conteudos_barra">
                                <p>Conhecer mais lojas</p>
                                <a href="parceiro_todos.php?lojas=premium&cidade=<?= $_GET['cidade'] ?>"> Mais Lojas </a>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>

            <?php $total_todos = 0; ?>
            <div class="box_parceiro box_comum">
                <h2>Todas as Lojas perto de Você :</h2>
                <div class="controle_box_petshop">
                    <?php foreach ($todos as $indice => $comum) { ?>

                        <a href="parceiro_pagina.php?id=<?= $comum->id ?>">
                            <div class="caixa_petshop">
                                <div class="img_petshop">
                                    <img src="<?= $comum->Logo ?>" alt="" />
                                </div>
                                <div class="info_petshop" style="background: <?= $comum->cor ?>">
                                    <div class="nome_petshop">
                                        <h3><?= $comum->NomeEmpresa ?></h3>
                                    </div>
                                    <div class="desc_petshop">
                                        <p><?= $comum->FuncoesDaLoja ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php $total_todos = $total_todos + 1; ?>
                        </a>
                    <?php } ?>
                    <?php
                    if ($total_todos > 7) {
                    ?>
                        <div class="barra_extra">
                            <div class="conteudos_barra">
                                <p>Conhecer mais lojas</p>
                                <a href="parceiro_todos.php?lojas=comum&cidade=<?= $_GET['cidade'] ?>"> Mais Lojas </a>
                            </div>
                        </div>
                    <?php
                    }
                    ?>


                </div>
            </div>
    <?php }
    } ?>

    <?php
    //Footer
    include_once("../incorporar_dados/globais/footer.php");
    ?>

</body>

</html>