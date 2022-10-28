<div id="mobile_painel">
    <div class="menus-mobile" onclick="toggleMenu();">
        <ul>
            <a href="#" class="login-mobile nome_bar">
                <li>Painel de Controle</li>
                <div class="linha ativo"></div>
            </a>
            <a href="#" data-bs-toggle="modal" data-bs-target="#empresaM">
                <li>Empresa</li>
                <div class="linha"></div>
            </a>
            <a href="produtos.php">
                <li>Produtos</li>
                <div class="linha"></div>
            </a>
            <a href="#" data-bs-toggle="modal" data-bs-target="#assinaturaM">
                <li>Assinatura</li>
                <div class="linha"></div>
            </a>
            <a href="#">
                <li>Alterar Senha</li>
                <div class="linha"></div>
            </a>
            <a href="logoff.php">
                <li>Sair</li>
                <div class="linha"></div>
            </a>
        </ul>
    </div>
    <header>
        <div class="logo_header">
            <img src="img/logo.png" alt="Logo SocialPet" />
        </div>
        <div class="titulo_home">Nome do Parceiro</div>
        <div class="menu-mobile" onclick="toggleMenu();"></div>
    </header>
    <script>
        function toggleMenu() {
            const menuToggle = document.querySelector(".menu-mobile");
            menuToggle.classList.toggle("active");
            const sidebar = document.querySelector(".menus-mobile");
            sidebar.classList.toggle("active");
        }
    </script>
</div>

<!-- Modal Empresa -->
<div class="modal fade" id="empresaM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Dados da Empresa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nome da Loja</label>
                    <input type="email" class="form-control" value="<?= $_SESSION['nome']; ?>" readonly />
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Link da Loja</label>
                    <input type="email" class="form-control" value="http://localhost/php/SocialPet/paginas_usuario/parceiro_pagina.php?id=<?= $_SESSION['id']; ?>" readonly />
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">CNPJ</label>
                    <input type="email" class="form-control" value="<?= $_SESSION['cnpj']; ?>" readonly />
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Funcionario</label>
                    <input type="email" class="form-control" value="<?= $_SESSION['funcionario']; ?>" readonly />
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Estado</label>
                    <input type="email" class="form-control" value="<?= $_SESSION['estado']; ?>" readonly />
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Cidade</label>
                    <input type="email" class="form-control" value="<?= $_SESSION['cidade']; ?>" readonly />
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Endereço</label>
                    <input type="email" class="form-control" value="<?= $_SESSION['endereco']; ?>" readonly />
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" value="<?= $_SESSION['email']; ?>" readonly />
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Serviços da Loja</label>
                    <input type="email" class="form-control" value="<?= $_SESSION['funcoes']; ?>" readonly />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Assinatura -->
<div class="modal fade" id="assinaturaM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Assinatura</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Limite de Produtos</label>
                    <input type="email" class="form-control" value="<?= $_SESSION['produtos']; ?>" readonly />
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Status do Plano</label>
                    <input type="email" class="form-control" value="<?= $_SESSION['status']; ?>" readonly />
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Data de Pagamento</label>
                    <input type="email" class="form-control" value="<?= $_SESSION['pagamento']; ?>" readonly />
                </div>
                <?php
                if ($_SESSION['hospedagem'] == '1') {
                ?>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Hospedagem</label>
                        <input type="email" class="form-control" value="Comum" readonly />
                    </div>
                <?php
                } elseif ($_SESSION['hospedagem'] == '2') {
                ?>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Hospedagem</label>
                        <input type="email" class="form-control" value="Premium" readonly />
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>