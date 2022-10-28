<div class="titulo_bg">

    <h1>Conheça nossos amiguinhos</h1>
</div>
<div class="central-catalogo">
    <?php
    if ($estados != null) {
    ?>
        <div class="filtro_regiao">
            <div class="titulo_regiao">Filtre por Estado</div>
            <div class="div_regiao">
                <form action="../paginas_usuario/adotar_estado.php" method="GET">
                    <select name="estado" class="estados">
                        <option value="" selected>Selecione um Estado</option>
                        <?php foreach ($estados as $indice => $estado) { ?>
                            <option value="<?= $estado->Estado ?>"><?= $estado->Estado ?></option>
                        <?php } ?>
                    </select>
                    <input type="submit" value="Filtrar" class="enviar_estado">
                </form>
            </div>
        </div>
    <?php } ?>
    <div class="catalogo">
        <?php $id = null ?>
        <?php foreach ($pets as $indice => $pet) { ?>
            <div class="caixa-animal">
                <div class="imagem-animal">
                    <img src="../incorporar_dados/doar/upload/<?= $pet->img ?>">
                </div>
                <div class="dados-animal">
                    <div class="nome-animal"><?= $pet->NomeAnimal ?></div>
                    <div class="historia-animal"><?= $pet->Descricao ?></div>
                    <div class="btn-animal">
                        <a href="#abrir_modal_aviso">Conhecer</a>
                    </div>
                </div>
            </div>
            <div class="modal-aberto" id="abrir_modal_aviso">
                <div class="caixa-modal">
                    <div class="secao-informacoes">
                        <div class="titulo-secao">
                            <div class="linha">A SocialPet Recomenda:</div>
                        </div>
                        <div class="caixa-de-dados">
                            <div class="dados-pet">1- </div>
                            <div class="dados-pet-resposta">Encontrar o Doador preferencialmente em horários diurnos e em lugares seguros e movimentados</div>
                        </div>
                        <div class="caixa-de-dados">
                            <div class="dados-pet">2- </div>
                            <div class="dados-pet-resposta">Deixar as informações claras com o Doador </div>
                        </div>
                        <div class="caixa-de-dados">
                            <div class="dados-pet">3- </div>
                            <div class="dados-pet-resposta">Levar uma ou mais pessoas quando for realizar o encontro</div>
                        </div>
                        <div class="caixa-de-dados">
                            <div class="dados-pet">4- </div>
                            <div class="dados-pet-resposta">Confirmar a identidade do Doador antes do encontro</div>
                        </div>
                        <div class="caixa-de-dados">
                            <div class="dados-pet">5- </div>
                            <div class="dados-pet-resposta">Antes de encontrar o Doador, garantir que tem todos os requisitos necessários para manter o Pet em segurança e com o conforto necessário </div>
                        </div>
                        <div class="caixa-de-dados">
                            <div class="dados-pet">Aviso: </div>
                            <div class="dados-pet-resposta">Qualquer ação julgada errada por alguma das partes poderá ser denunciada e dirigida para às autoridades competentes.</div>
                        </div>
                    </div>
                    <div class="acoes">
                        <a class="none" href="#fechar_div">
                            <button class="btn-acoes-modal fechar">
                                <i class="fa-solid fa-x icon-email"></i>
                                Fechar
                            </button>
                        </a>
                        <a class="none" href="#abrir_modal_pet<?= $pet->ID_Animal ?>">
                            <button class="btn-acoes-modal continuar">
                            <i class="fa-solid fa-check icon-email"></i>
                                Continuar
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="modal-aberto" id="abrir_modal_pet<?= $pet->ID_Animal ?>">
                <div class="caixa-modal">
                    <div class="secao-informacoes">
                        <div class="titulo-secao">
                            <div class="linha">Informações do Pet</div>
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
                    <div class="acoes">
                        <a class="none" href="mailto:<?= $pet->Email ?>?subject=Olá me interessei em adotar o <?= $pet->NomeAnimal ?>">
                            <button class="btn-acoes-modal email">
                                <i class="fa-solid fa-envelope icon-email"></i>
                                Email
                            </button>
                        </a>
                        <a class="none" target="_blank" href="https://api.whatsapp.com/send?phone=55<?= $pet->Whatsapp ?>&text=Ol%C3%A1%20me%20interessei%20em%20adotar%20o%20<?= $pet->NomeAnimal ?>">
                            <button class="btn-acoes-modal whpp">
                                <i class="fa-brands fa-whatsapp icon-whatsapp"></i>
                                Whatsapp
                            </button>
                        </a>
                        <a class="none" href="#fechar_div">
                            <button class="btn-acoes-modal fechar">
                                <i class="fa-solid fa-x icon-email"></i>
                                Fechar
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php
        if ($pets == null) {
            echo 'Nenhum pet disponivel para adoção';
        }
        ?>

    </div>
</div>