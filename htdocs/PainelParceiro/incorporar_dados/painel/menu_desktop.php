<div id="desktop_painel">
  <div class="painel_principal">
    <?php
    require_once('incorporar_dados/menu/menu_lateral_d.php');
    ?>
    <section class="lateral_d">
      <div class="box_titulo">
        <h1>Painel de Controle</h1>
      </div>
      <div class="group_box">
        <a href="#">
          <div class="box_view">
            <div class="content_box">
              <div class="text_box">
                <p class="primary_box">Em breve</p>
                <p class="second_box">Cliques na Loja</p>
              </div>
              <div class="icon_box">
                <i class="fa-solid fa-eye"></i>
              </div>
            </div>
            <div class="more_info">
              <p>Mais informações</p>
              <i class="fa-solid fa-circle-right"></i>
            </div>
          </div>
        </a>
        <a href="#">
          <div class="box_view whatsapp">
            <div class="content_box">
              <div class="text_box">
                <p class="primary_box">Em breve</p>
                <p class="second_box whatsapp">Cliques no Whatsapp</p>
              </div>
              <div class="icon_box">
                <i class="fa-brands fa-whatsapp"></i>
              </div>
            </div>
            <div class="more_info">
              <p>Mais informações</p>
              <i class="fa-solid fa-circle-right"></i>
            </div>
          </div>
        </a>
        <a href="#" data-bs-toggle="modal" data-bs-target="#empresa">
          <div class="box_view pct">
            <div class="content_box">
              <div class="text_box">
                <p class="primary_box pct">Empresa</p>
                <p class="second_box pct">Consulte seu Plano</p>
              </div>
              <div class="icon_box">
                <i class="fa-solid fa-credit-card"></i>
              </div>
            </div>
            <div class="more_info">
              <p>Mais informações</p>
              <i class="fa-solid fa-circle-right"></i>
            </div>
          </div>
        </a>
        <a href="#" data-bs-toggle="modal" data-bs-target="#assinatura">
          <div class="box_view whatsapp">
            <div class="content_box">
              <div class="text_box">
                <p class="primary_box pagamento">Status de Pagamento</p>
                <p class="second_box pagamento">Ativo - Vence dia 15</p>
              </div>
              <div class="icon_box">
                <i class="fa-solid fa-circle-check"></i>
              </div>
            </div>
            <div class="more_info">
              <p>Mais informações</p>
              <i class="fa-solid fa-circle-right"></i>
            </div>
          </div>
        </a>
      </div>
      <div class="acoes_rapidas">
        <a href="produtos.php">
          <div class="btn_rapido produtos">
            <i class="fa-solid fa-barcode"></i>
            <p>Produtos</p>
          </div>
        </a>
        <a href="#" data-bs-toggle="modal" data-bs-target="#empresa">
          <div class="btn_rapido empresa">
            <i class="fa-solid fa-briefcase"></i>
            <p>Empresa</p>
          </div>
        </a>
        <a href="#" data-bs-toggle="modal" data-bs-target="#assinatura">
          <div class="btn_rapido assinatura">
            <i class="fa-solid fa-credit-card"></i>
            <p>Assinatura</p>
          </div>
        </a>
        <a href="#">
          <div class="btn_rapido senha">
            <i class="fa-solid fa-lock"></i>
            <p>Senha</p>
          </div>
        </a>
      </div>
    </section>
  </div>
</div>