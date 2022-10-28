<div class="menus-mobile" onclick="toggleMenu();">
    <ul>
        <?php
        if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') {
        ?>
            <a href="../paginas_usuario/login.php" class="login-mobile nome_bar">
                <li>Entrar</li>
            </a>
            <a href="../paginas_usuario/index.php">
                <li>Inicio</li>
            </a>
            <a href="../paginas_usuario/filtrar_parceiro.php">
                <li>Parceiros</li>
            </a>
            <a href="../paginas_usuario/adotar.php">
                <li>Adotar</li>
            </a>
            <a href="../paginas_usuario/doar.php">
                <li>Doar</li>
            </a>
            <a href="../paginas_usuario/contato.php">
                <li>Contato</li>
            </a>
            <a href="../paginas_usuario/denunciar.php">
                <li>Denunciar</li>
            </a>
        <?php } else {
        ?>
            <a href="#" class="login-mobile nome_bar">
                <li> <?php $value = $_SESSION['nome'];
                        echo $value; ?> </li>
            </a>
            <a href="../paginas_usuario/index.php">
                <li>Inicio</li>
            </a>
            <a href="../paginas_usuario/filtrar_parceiro.php">
                <li>Parceiros</li>
            </a>
            <a href="../paginas_usuario/adotar.php">
                <li>Adotar</li>
            </a>
            <a href="../paginas_usuario/doar.php">
                <li>Doar</li>
            </a>
            <a href="../paginas_usuario/meuspets.php">
                <li>Meus Pets</li>
            </a>
            <a href="../paginas_usuario/contato.php">
                <li>Contato</li>
            </a>
            <a href="../paginas_usuario/denunciar.php">
                <li>Denunciar</li>
            </a>
            <div class="login-mobile sair">
                <a href="#abrir">
                <li>Alterar Senha</li>
                </a>
                <a href="../funcional_php/logoff.php">
                    <li>Sair</li>
                </a>
            </div>
            
        <?php }
        ?>
    </ul>
</div>
<header>

    <div class="limitador">
        <div class="space"></div>
        <a href="../paginas_usuario/index.php" style="text-decoration: none;">
            <div class="logo">
                <div class="logoimg"><img src="../img/logo.png" width="45px"></div>
                <div class="logotxt">SocialPet</div>
            </div>
        </a>


        <div class="menus">
            <ul>
                <a href="../paginas_usuario/index.php">
                    <li>Inicio</li>
                </a>
                <a href="../paginas_usuario/filtrar_parceiro.php">
                    <li>Parceiros</li>
                </a>
                <a href="../paginas_usuario/adotar.php">
                    <li>Adotar</li>
                </a>
                <a href="../paginas_usuario/doar.php">
                    <li>Doar</li>
                </a>
                <a href="../paginas_usuario/contato.php">
                    <li>Contato</li>
                </a>
                <a href="../paginas_usuario/denunciar.php">
                    <li>Denunciar</li>
                </a>
            </ul>
        </div>

        <div class="account">
            <div class="accountTxt">
                <?php
                if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') {
                ?>
                    <a href="../paginas_usuario/login.php">Entrar</a> /
                    <a href="../paginas_usuario/cadastrar.php">Cadastrar</a>
            </div>
            <div class="accountImg">
                <img src="../img/user.png" width="40px">
            </div>
        <?php } else {
                    $value = $_SESSION['nome'];
                    echo $value;
        ?>
        </div>
        <div class="accountTxt">
            <i onclick="toggleOption()" class="down fa-solid fa-angle-down"></i>
            <div id="button" class="down_options">
                <div> <a href="../paginas_usuario/meuspets.php">Minhas Doações</a> </div>
                <div> <a href="#abrir">Alterar Senha</a> </div>
            </div>
        </div>
        <div class="accountImg">
            <img src="../img/user.png" width="40px">
        </div>
        <div class="menus">
            <ul><a class="sair" href="../funcional_php/logoff.php">Sair</a></ul>
        </div>
    <?php
                }
    ?>

    </div>

    <div class="menu-mobile" onclick="toggleMenu();"></div>

    </div>

    <script>
        function toggleMenu() {
            const menuToggle = document.querySelector('.menu-mobile');
            menuToggle.classList.toggle('active');
            const sidebar = document.querySelector('.menus-mobile');
            sidebar.classList.toggle('active');
        }

        function toggleOption() {
            const menuToggle = document.getElementById('button');
            menuToggle.classList.toggle('active');
        }
    </script>

</header>
<?php
     $placeh_sa = "Senha Atual";
     $placeh_si = "Senha Nova";
    if (isset($_GET['erro']) && $_GET['erro'] == "si") {
        $placeh_sa = "Senha incorreta";
    } 
    if(isset($_GET['erro']) && $_GET['erro'] == "ni"){
        $placeh_si = "Senha Diferente";
    }
?>
<div class="modal-aberto modal_senha" id="abrir">
        <div class="caixa-modal caixa_senha">
            <div class="secao-informacoes secao_senha">
                <form action="controle_de_cadastro.php?acao=atualizar" method="POST">
                    <div class="titulo-secao"> <div class="linha">Alterar Senha</div> </div>
                    <div class="caixa-de-dados caixa_de_senha">
                        <div class="dados-pet">Senha Atual: </div> <div class="dados-pet-resposta">
                            <input class="alterar_senha_input" type="password" name="senha_antiga" placeholder="<?= $placeh_sa ?>">
                        </div>
                    </div>
                    <div class="caixa-de-dados caixa_de_senha">
                        <div class="dados-pet"><?= $placeh_sa ?>: </div> <div class="dados-pet-resposta">
                            <input class="alterar_senha_input" type="password" name="senha_nova" placeholder="<?= $placeh_si ?>">
                        </div>
                    </div>
                    <div class="caixa-de-dados caixa_de_senha">
                        <div class="dados-pet">Confirme a Senha: </div> <div class="dados-pet-resposta">
                            <input class="alterar_senha_input" type="password" name="senha_nova_confirmacao" placeholder="<?= $placeh_si ?>">
                        </div>
                    </div>
                
            </div>
            <div class="acoes">
                <button type="submit" class="btn-acoes-modal alterar">
                <i class="fa-solid fa-lock icon-email"></i>
                    Alterar
                </button>
                </form>
                <a class="none" href="#fechar_div">
                    <button class="btn-acoes-modal fechar">
                        <i class="fa-solid fa-x icon-email"></i>
                        Fechar
                    </button>
                </a>
            </div>
        </div>
        </div>