<?php
include_once("../incorporar_dados/cadastrar/head.php");

?>

<body id="body-cadastrar">
    <div class="fundo-cadastrar-cadastrar">

        <div class="estilo-redondo-1"></div>

        <div class="quadro-cadastrar">
            <div class="apresentacao-cadastrar">
                <h3>Olá de volta !</h3> <br>
                <p>clique no botão abaixo se já tiver uma conta.</p>
                <a href="../paginas_usuario/login.php" class="btn-cadastrar">Entrar</a>
            </div>
            <div class="cadastrar">
                <form class="form " method="post" action="../incorporar_dados\cadastrar\controle_de_cadastro.php?acao=inserir">
                    <div class="cadastrar-conteudo">
                        <h3>Cadastrar</h3>
                        <div class="cadastrar-input">
                            <?php
                            require_once("../incorporar_dados/cadastrar/cadastro_dados_pessoais.php");
                            require_once("../incorporar_dados/cadastrar/cadastro_dados_endereco.php");
                            require_once("../incorporar_dados/cadastrar/cadastro_dados_login.php");
                            ?>

                        </div>
                        <div class="btn-submit" onclick="toggleClass()">
                            <input class="btn-enviar" type="submit" value="Cadastrar" onclick='return validadata()' onclick='return verificarCPF(c)'>
                        </div>

                    </div>
                </form>

            </div>
        </div>

        <div class="estilo-redondo-2"></div>

    </div>

    <script src="../script/cpf-validador.js"></script>
    <script src="../script/data-validador.js"></script>
    <script src="../script/email-validador.js"></script>
    <script>
        function toggleClass() {
            const body = document.querySelector('form');
            body.classList.toggle('validar-form');
        }
    </script>
</body>

</html>