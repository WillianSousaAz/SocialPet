<div class="central">
    <div class="doar-central">
        <div class="texto-doar">Cadastrar animal</div>
        <div class="formulario">
            <form method="POST" action="../incorporar_dados/doar/controle_animais.php?acao=inserir" enctype="multipart/form-data">
                <div class="modal-aberto" id="abrir_modal_aviso">
                    <div class="caixa-modal">
                        <div class="secao-informacoes">
                            <div class="titulo-secao">
                                <div class="linha">A SocialPet Recomenda:</div>
                            </div>
                            <div class="caixa-de-dados">
                                <div class="dados-pet">1- </div>
                                <div class="dados-pet-resposta">Encontrar o Adotante preferencialmente em horários diurnos e em lugares seguros e movimentados</div>
                            </div>
                            <div class="caixa-de-dados">
                                <div class="dados-pet">2- </div>
                                <div class="dados-pet-resposta">Deixar as informações claras com o adotante </div>
                            </div>
                            <div class="caixa-de-dados">
                                <div class="dados-pet">3- </div>
                                <div class="dados-pet-resposta">Levar uma ou mais pessoas quando for realizar o encontro</div>
                            </div>
                            <div class="caixa-de-dados">
                                <div class="dados-pet">4- </div>
                                <div class="dados-pet-resposta">Confirmar a identidade do adotante antes do encontro</div>
                            </div>
                            <div class="caixa-de-dados">
                                <div class="dados-pet">5- </div>
                                <div class="dados-pet-resposta">Antes de entregar o Pet, fazer uma checagem com o veterinário para garantir o seu bem estar e evitar problemas futuros.</div>
                            </div>
                            <div class="caixa-de-dados">
                                <div class="dados-pet">Aviso: </div>
                                <div class="dados-pet-resposta">Qualquer ação julgada errada por alguma das partes poderá ser denunciada e dirigida para às autoridades competentes.</div>
                            </div>
                        </div>
                        <div class="acoes">
                            <a class="none" href="#fechar_div">
                                <button type="button" class="btn-acoes-modal continuar">
                                    <i class="fa-solid fa-check icon-email"></i>
                                    Continuar
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="esquerda-input">
                    <label class="txt-input">Nome do pet :</label>
                    <input type="text" name="nomePet" required>

                    <input type="hidden" value="Validar">

                    <label class="txt-input">Espécie :</label>
                    <select name="especie" required>
                        <option value="">Selecione a espécie :</option>
                        <option value="Cachorro">Cachorro</option>
                        <option value="Gato">Gato</option>
                    </select>

                    <label class="txt-input">Sexo :</label>
                    <select name="sexo" required>
                        <option value="">Selecione o Sexo :</option>
                        <option value="Macho">Macho</option>
                        <option value="Fêmea">Fêmea</option>
                    </select>

                    <label class="txt-input">Raça :</label>
                    <input name="raca" type="text">

                    <label class="txt-input">Idade do pet :</label>
                    <input name="idade" type="text" pattern="[0-9]+$">

                    <label class="txt-input" required>Conte um pouco sobre a história dele :</label>
                    <textarea name="historia" cols="59" rows="10"></textarea>

                </div>
                <div class="direita-input">
                    <label class="txt-input">Imagem do pet</label>
                    <input type="file" id="img" name="img" accept="image/*" required>

                    <label class="txt-input">Deficiência :</label>
                    <input name="deficiencia" type="text">

                    <label class="txt-input">Castrado :</label>
                    <select name="castrado" required>
                        <option value="">Selecione uma opção :</option>
                        <option value="Sim">Sim</option>
                        <option value="Não">Não</option>
                    </select>

                    <label class="txt-input" required>Vacinas :</label>
                    <textarea name="vacinas" cols="40" rows="10"></textarea>

                    <label class="txt-input">Email para contato :</label>
                    <input name="email_doar" type="text" maxlength="150" required>

                    <label class="txt-input">Whatsapp para contato :</label>
                    <input name="whatsapp_doar" type="text" minlength="11" maxlength="11" pattern="[0-9]+$" required>

                    <input class="btn-enviar" type="submit" value="Doar">

                </div>


            </form>
        </div>
    </div>
</div>