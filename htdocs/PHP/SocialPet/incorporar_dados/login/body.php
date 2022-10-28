<div class="fundo-login-cadastrar">

    <div class="estilo-redondo-1"></div>

    <div class="quadro-login">
        <div class="apresentacao-login">
            <h3>Ainda não tem uma conta ?</h3> <br>
            <p>Clique no botão abaixo e crie já sua conta gratuitamente.</p>
            <a href="../paginas_usuario/cadastrar.php" class="btn-cadastrar">Cadastrar</a>
        </div>
        <div class="login">
            <form action="../incorporar_dados/login/conexao.php" method="post">
                <div class="login-barra">
                    <i class="social-banner-i">
                        <p class="social-banner">SocialPet</p>
                    </i>
                </div>
                <div class="login-conteudo">
                    <h3>Entrar</h3>
                    <div class="email-input">
                        <input type="email" name="email" placeholder="Digite seu email :">
                    </div>
                    <div class="input-senha">
                        <input type="password" name="senha" placeholder="Digite sua senha :" id="password">
                        <div id="toggle" onclick="showHide();"></div>
                    </div>
                    <script>
                        const password = document.getElementById('password');
                        const toggle = document.getElementById('toggle');

                        function showHide() {
                            if (password.type === 'password') {
                                password.setAttribute('type', 'text');
                                toggle.classList.add('hide')
                            } else {
                                password.setAttribute('type', 'password');
                                toggle.classList.remove('hide')
                            }
                        }
                    </script>
                    <?php if (isset($_GET['login']) && $_GET['login'] == 'erro') { ?>
                        <div class="text-danger">
                            Usuario ou senha inválidos(s)
                        </div>
                    <?php } ?>
                    <?php if (isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>
                        <div class="text-danger">
                            Faça login antes !
                        </div>
                    <?php } ?>
                    <?php if (isset($_GET['login']) && $_GET['login'] == 'erro3') { ?>
                        <div class="text-danger">
                            Usuario já existe !
                        </div>
                    <?php } ?>
                    <?php if (isset($_GET['login']) && $_GET['login'] == 'sucess') { ?>
                        <div class="text-sucess">
                            Usuario criado com Sucesso !
                        </div>
                    <?php } ?>
                    <p>Esqueci a senha</p>
                    <div class="btn-submit">
                        <input class="btn-enviar" type="submit" value="Entrar">
                    </div>

                </div>
            </form>

        </div>
    </div>

    <div class="estilo-redondo-2"></div>

</div>