<header id="lateral_bar" class="lateral_bar">
    <ul class="nav flex-column">
        <li class="nav-item burguer" onclick="toggleMen();">
            <a class="nav-link" aria-current="page" href="#">
                <i class="fa-solid fa-bars hamburger"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link logo_espace">
                <img src="img/logo.png" alt="">
                <p>Nome do Parceiro</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link icon_dash active" href="painel_parceiro.php">
                <i class="fa-solid fa-gauge"></i>
                <p>Painel de Controle</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link icon_dash" href="#" data-bs-toggle="modal" data-bs-target="#empresa">
                <i class="fa-solid fa-briefcase"></i></i>
                <p>Empresa</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link icon_dash" href="produtos.php">
                <i class="fa-solid fa-box"></i>
                <p>Produtos</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link icon_dash" href="#" data-bs-toggle="modal" data-bs-target="#assinatura">
                <i class="fa-solid fa-credit-card"></i>
                <p>Assinatura</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link icon_dash" href="#">
                <i class="fa-solid fa-lock"></i>
                <p>Senha</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="logoff.php">
                <i class="fa-solid fa-arrow-right-from-bracket icon_dash_logout"></i>
            </a>
        </li>
    </ul>
</header>

<script>
    function toggleMen() {
        const menuToggle = document.getElementById("lateral_bar");
        menuToggle.classList.toggle("active");
    }
</script>

<!-- Modal Empresa -->
<div class="modal fade" id="empresa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
<div class="modal fade" id="assinatura" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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