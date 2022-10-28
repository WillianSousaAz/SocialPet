<?php
require_once("../funcional_php/validador_acesso.php");
$acao = 'recuperarMeus';
require 'controle_pet.php';
//echo "<pre>";
//print_r($pets);
//echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Pets</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/ac19272455.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="../img/icon.ico" />
    <script src="../script/input.js"></script>
</head>

<body>

    <?php
    //Menu
    include_once("../incorporar_dados/globais/menu.php");
    ?>

    <div class="titulo_bg">

        <h1>Meus Pets</h1>
    </div>

    <div class="content_bg">

        <div class="central-catalogo altura-max">
            <div class="catalogo">
                <?php $id = null ;
                    $total = count($pets);
                    echo $total;
                ?>
                <?php foreach ($pets as $indice => $pet) { ?>
                    <div class="caixa-animal">
                        <div class="imagem-animal">
                            <img src="../incorporar_dados/doar/upload/<?= $pet->img ?>">
                        </div>
                        <div class="dados-animal">
                            <div class="nome-animal"><?= $pet->NomeAnimal ?></div>
                            <div class="historia-animal"><?= $pet->Descricao ?></div>
                            <div class="dados-pet" style="display: flex;">Status: <div class="dados-pet-resposta"><?= $pet->Status ?></div></div>
                            <div class="btn-animal">
                                <a href="#abrir_modal<?= $pet->ID_Animal ?>">Detalhes</a>
                            </div>
                        </div>
                    </div>
                    <div class="modal-aberto" id="abrir_modal<?= $pet->ID_Animal ?>">
                        <div class="caixa-modal">
                            <div class="secao-informacoes">
                                <div class="titulo-secao">
                                    <div class="linha">Informações do Pet</div>
                                </div>
                                <div class="caixa-de-dados">
                                    <div class="dados-pet">Status: </div>
                                    <div class="dados-pet-resposta"><?= $pet->Status ?></div>
                                </div>
                                <div class="caixa-de-dados">
                                    <div class="dados-pet">Nome: </div>
                                    <div class="dados-pet-resposta"><?= $pet->NomeAnimal ?></div>
                                </div>
                                <div class="caixa-de-dados">
                                    <div class="dados-pet">Especie: </div>
                                    <div class="dados-pet-resposta"><?= $pet->Especie ?></div>
                                </div>
                                <div class="caixa-de-dados">
                                    <div class="dados-pet">Sexo: </div>
                                    <div class="dados-pet-resposta"><?= $pet->sexo ?></div>
                                </div>
                                <div class="caixa-de-dados">
                                    <div class="dados-pet">Raça: </div>
                                    <div class="dados-pet-resposta"><?= $pet->Raca ?></div>
                                </div>
                                <div class="caixa-de-dados">
                                    <div class="dados-pet">Deficiência: </div>
                                    <div class="dados-pet-resposta"><?= $pet->Deficiencia ?></div>
                                </div>
                                <div class="caixa-de-dados">
                                    <div class="dados-pet">Castrado: </div>
                                    <div class="dados-pet-resposta"><?= $pet->Castrado ?></div>
                                </div>
                                <div class="caixa-de-dados">
                                    <div class="dados-pet">Vacinas: </div>
                                    <div class="dados-pet-resposta"><?= $pet->Vacinas ?></div>
                                </div>
                                <div class="caixa-de-dados">
                                    <div class="dados-pet">Idade: </div>
                                    <div class="dados-pet-resposta"><?= $pet->Idade ?></div>
                                </div>
                                <div class="caixa-de-dados">
                                    <div class="dados-pet">Descrição: </div>
                                    <div class="dados-pet-resposta"><?= $pet->Descricao ?></div>
                                </div>
                                <div class="caixa-de-dados">
                                    <div class="dados-pet">Foto:</div>
                                    <div class="imagem-div">
                                        <img class="imagem-pet" src="../incorporar_dados/doar/upload/<?= $pet->img ?>" alt="">
                                    </div>
                                </div>
                                <div class="titulo-secao">
                                    <div class="linha"> Informações do Contato </div>
                                </div>
                                <div class="caixa-de-dados">
                                    <div class="dados-pet">Nome do Dono : </div>
                                    <div class="dados-pet-resposta"><?= $pet->NomeDoador ?></div>
                                </div>
                                <div class="caixa-de-dados">
                                    <div class="dados-pet">Cidade : </div>
                                    <div class="dados-pet-resposta"><?= $pet->Cidade ?></div>
                                </div>
                                <div class="caixa-de-dados">
                                    <div class="dados-pet">Estado : </div>
                                    <div class="dados-pet-resposta"><?= $pet->Estado ?></div>
                                </div>
                            </div>
                            <form method="POST" action="controle_pet.php?acao=atualizarDoado">
                                <div id="inputs">
                                </div>
                            <div class="acoes">
                                <?php
                                 if ($pet->Status == "Doado") {
                                ?>
                                    <a class="none" href="#fechar_div">
                                        <button class="btn-acoes-modal fechar">
                                            <i class="fa-solid fa-x icon-email"></i>
                                            Fechar
                                        </button>
                                    </a>
                                <?php
                                 } else{
                                ?>
                                <button type="submit" class="btn-acoes-modal doado" onclick="adicionarInputs()">
                                <i class="fa-solid fa-hand-holding-medical"></i>
                                    Doado
                                </button>
                                <a class="none" href="#fechar_div">
                                        <button class="btn-acoes-modal fechar">
                                            <i class="fa-solid fa-x icon-email"></i>
                                            Fechar
                                        </button>
                                </a>
                                <?php
                                 }
                                ?>
                            </div>
                            </form>
                        </div>
                    </div>
                <?php } ?>
                <?php
                if ($pets == null) {
                    echo 'Você ainda não doou nenhum pet';
                }
                ?>

            </div>
        </div>

    </div>

    <?php
    //Footer
    include_once("../incorporar_dados/globais/footer.php");
    ?>
    <script>
        function adicionarInputs() {
            document.getElementById('inputs').innerHTML = '<input type="hidden" name="id" value="<?= $pet->ID_Animal ?>"><input type="hidden" name="status" value="Doado">';
        }
    </script>

</body>

</html>