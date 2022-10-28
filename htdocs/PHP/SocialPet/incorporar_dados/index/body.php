<div class="pedido">

        <p>SocialPet, o lugar onde tranformamos o abandono em amor novamente
            
            <br>Venha conhecer nossas opções
        
        </p>

        <div class="dir-row">
            <a href="doar.php" class="btn-adote">Doe</a>
            <a href="adotar.php" class="btn-adote">Adote</a>
        </div>

    </div>

    <div class="secoes-home">
        <div class="fundo-secao-1">

            <div class="conteudo-secao-1">
                <div class="titulo-secao-1">Todos precisamos de um lar</div>
                <div class="txt-secao-1">Venha conhecer nossos animais disponiveis para adoção</div>
                <a href="adotar.php" class="btn-adote">Adote</a>
            </div>

            <div class="botao-proxima-div" onclick="Slide();">
                >
            </div>

        </div>
        <div class="fundo-secao-2">

            <div class="conteudo-secao-2">
                <div class="titulo-secao-2">Faça o certo pelo seu bichinho</div>
                <div class="txt-secao-2">conheça nossas opções para doação de seu pet</div>
                <a href="doar.php" class="btn-adote">Doar</a>
            </div>

            <div class="botao-proxima-div" onclick="Slide();">
                < <!-- -->
            </div>

        </div>

        <script>
            function Slide() {
                const menuToggle = document.querySelector('.fundo-secao-2');
                menuToggle.classList.toggle('puxar-secao-2');

                const sidebar = document.querySelector('.fundo-secao-1');
                sidebar.classList.toggle('puxar-secao-1');
            }
        </script>

    </div>

    <div class="secao-2">
        <div class="centralizar-conteudo">
            <div class="caixa-1">
                <div class="icon-caixa"><img src="../img/veterinario.png"></div>
                <div class="text-caixa">
                    Mais de xxx animais ja foram tratados devido a SocialPet, que auxilou na melhora destes animais desde a busca até na procura de um novo lar fiscalizado e adequado para sua nova vida
                </div>
            </div>
            <div class="caixa-1">
                <div class="icon-caixa"><img src="../img/racao-para-animais.png"></div>
                <div class="text-caixa">
                    Graças a SocialPet e a ajuda das ongs, conseguimos arrecadar X de ração, que é enviada diretamente para nossos centros de cuidado do animal, assim, tiramos a fome de mais de X animais.
                </div>
            </div>
            <div class="caixa-1">
                <div class="icon-caixa"><img src="../img/encontros.png"></div>
                <div class="text-caixa">
                Estamos em funcionamento em todo o País, assim facilitando a vida de quem sonha em ter um amiguinho novo em sua casa.
                </div>
            </div>
        </div>
    </div>