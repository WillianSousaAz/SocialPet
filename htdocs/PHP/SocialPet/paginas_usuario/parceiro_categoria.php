<?php
session_start();
$acao = "recuperarParceiroCat";
require_once('../funcional_php/parceiro.php');
if ($categoria == null) {
  $mensagem = 'Sem Produtos Disponíveis';
  $vazio = 'style="display: none;"';
} else {
  $mensagem = null;
  $vazio = null;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parceiro - Socialpet</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/parceiro_pagina.css">
  <script src="https://kit.fontawesome.com/ac19272455.js" crossorigin="anonymous"></script>
  <link rel="icon" type="image/png" href="../img/icon.ico" />
</head>

<body>
  <?php
  //Menu
  include_once("../incorporar_dados/globais/menu.php");
  ?>
  <?php foreach ($loja as $indice => $info) {
    if ($info->Status != "Ativo") {
      $desativada = 'style="display: none;"';
      $aviso = 'Loja desativada';
    } else {
      $desativada = null;
      $aviso = null;
    }
  ?>

    <section class="superior_loja_desk" <?= $desativada ?>>
      <div class="content_superior">
        <div class="content_l">
          <h1><?= $info->NomeEmpresa ?></h1>
          <p class="info_loja funcoes"><?= $info->FuncoesDaLoja ?></p>
          <div class="alinhar">
            <?php
            if ($info->disponibilidade == "Fechado") {
            ?>
              <span class="status_loja" style="color: #db0001;"><?= $info->disponibilidade ?></span>
            <?php
            } else {
            ?>
              <span class="status_loja"><?= $info->disponibilidade ?></span>
            <?php
            }
            ?>
            <span class="funcionamento">
              Horario de Funcionamento <?= $info->funcionamento ?>
            </span>
          </div>

          <p class="info_loja endereco">
            <?= $info->endereco ?> <?= $info->CidadeLocal ?>, <?= $info->EstadoLocal ?>
          </p>
          <a href="<?= $info->rota ?>" target="_blank">Como Chegar</a>
        </div>
        <div class="content_r">
          <div class="bg_image">
            <img src="<?= $info->Logo ?>" alt="" />
          </div>
        </div>
      </div>
    </section>
    <section class="superior_loja_mobile" <?= $desativada ?>>
      <div class="agrupamento_content_loja">
        <div class="content_loja">
          <div class="logo_loja">
            <img src="<?= $info->Logo ?>" alt="" />
          </div>
          <div>
            <h2><?= $info->NomeEmpresa ?></h2>
            <p><?= $info->FuncoesDaLoja ?></p>
          </div>
        </div>
        <div class="informacoes_loja">
          <div class="status_localidade">
            <?php
            if ($info->disponibilidade == "Fechado") {
            ?>
              <h2 class="status_loja" style="color: #db0001;"><?= $info->disponibilidade ?></h2>
            <?php
            } else {
            ?>
              <h2 class="status_loja"><?= $info->disponibilidade ?></h2>
            <?php
            }
            ?>
            <p>Horario de Funcionamento <?= $info->funcionamento ?></p>
          </div>
          <div class="endereco">
            <p><?= $info->endereco ?> <?= $info->CidadeLocal ?>, <?= $info->EstadoLocal ?></p>
          </div>
          <div class="link_endereco">
            <a href="<?= $info->rota ?>" target="_blank">Como Chegar</a>
          </div>
        </div>
      </div>
    </section>
    <section class="base_content_site" <?= $desativada ?>>
      <div class="content_site">
        <div class="box_search" <?= $vazio ?>>
          <form action="">
            <input type="text" placeholder="Busque seu item" name="produto" />
          </form>
        </div>
        <div class="group_list">
          <!-- Repeat with PHP - Foreach Category -->
          <?php
          echo $mensagem;
          ?>
          <?php foreach ($categoria as $indice => $cat) { ?>
            <div class="lista">
              <!-- Category -->
              <div class="titulo_cat">
                <h2><?= $cat->categoria ?></h2>
                <a href="parceiro_pagina.php?id=<?= $info->id ?>&categoria=<?= $cat->categoria ?>">Voltar</a>
              </div>
              <div class="control_product todos">
                <!-- Box -->
                <?php foreach ($produtos as $indice => $prod) { ?>
                  <?php
                  if ($prod->categoria == $cat->categoria) {
                  ?>
                    <a href="#abrir_modal_prod<?= $prod->id ?>">
                      <div class="box_product">
                        <!-- Image -->
                        <div class="box_image">
                          <img src="<?= $prod->imagem ?>" alt="Ração" />
                        </div>
                        <!-- Info -->
                        <div class="info_box">
                          <!-- Price -->
                          <h3><?= $prod->preco ?></h3>
                          <!-- Name -->
                          <p class="product_name"><?= $prod->nome_produto ?></p>
                          <!-- Description -->
                          <p class="metodo"><?= $prod->medida ?></p>
                        </div>
                      </div>
                    </a>

                    <div class="modal-aberto" id="abrir_modal_prod<?= $prod->id ?>">
                      <div class="caixa-modal">
                        <div class="secao-informacoes">
                          <div class="titulo-secao">
                            <div class="linha">Informações do Produto</div>
                          </div>
                          <div class="caixa-de-dados">
                            <div class="imagem-div prod_img">
                              <img class="imagem-pet" src="<?= $prod->imagem ?>" alt="">
                            </div>
                          </div>
                          <div class="caixa-de-dados">
                            <div class="dados-pet">Nome: </div>
                            <div class="dados-pet-resposta"><?= $prod->nome_produto ?></div>
                          </div>
                          <div class="caixa-de-dados">
                            <div class="dados-pet">Categoria: </div>
                            <div class="dados-pet-resposta"><?= $prod->categoria ?></div>
                          </div>
                          <div class="caixa-de-dados">
                            <div class="dados-pet">Marca: </div>
                            <div class="dados-pet-resposta"><?= $prod->marca ?></div>
                          </div>
                          <div class="caixa-de-dados">
                            <div class="dados-pet">Preco: </div>
                            <div class="dados-pet-resposta"><?= $prod->preco ?></div>
                          </div>
                          <div class="caixa-de-dados">
                            <div class="dados-pet">Medida: </div>
                            <div class="dados-pet-resposta"><?= $prod->medida ?></div>
                          </div>
                          <div class="caixa-de-dados">
                            <div class="dados-pet">Descrição: </div>
                          </div>
                          <div class="caixa-de-dados">
                            <div class="dados-pet-resposta descricao"><?= $prod->descricao ?></div>
                          </div>
                        </div>
                        <div class="acoes">
                          <a class="none" href="#fechar_div">
                            <button class="btn-acoes-modal fechar">
                              <i class="fa-solid fa-x icon-email"></i>
                              Fechar
                            </button>
                          </a>
                        </div>
                      </div>
                    </div>
                  <?php
                  }
                  ?>
                <?php } ?>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </section>
    <section class="fazer_pedido_mobile" <?= $vazio ?> <?= $desativada ?>>
      <div class="box_pedido">
        <h4>Gostou de Algo ?</h4>
        <a href="https://wa.me/55<?= $info->Whatsapp ?>" target="_blank">Fazer Pedido</a>
      </div>
    </section>
    <section class="fazer_pedido_desk" <?= $vazio ?> <?= $desativada ?>>
      <div class="box_pedido">
        <a href="https://wa.me/55<?= $info->Whatsapp ?>" target="_blank">Fazer Pedido <i class="fa-brands fa-whatsapp"></i></a>
      </div>
    </section>

  <?php } ?>

  <?php
  //Footer
  include_once("../incorporar_dados/globais/footer.php");
  ?>

</body>

</html>