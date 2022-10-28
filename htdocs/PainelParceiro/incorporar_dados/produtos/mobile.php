<section class="control_painel">
    <div class="tela_painel">
        <div class="titulo_tela">
            <h1>Painel de Controle</h1>
        </div>
        <div class="caixa_info_full">
            <div class="caixa_painel caixa_painel_full produto" data-bs-toggle="modal" data-bs-target="#MobileModalCat">
                <div class="informacoes_caixa">
                    <h2>Categoria</h2>
                </div>
                <div class="caixa_mais_informacoes">
                    <div class="mais_informacoes">
                        <p>Cadastrar</p>
                        <i class="fa-solid fa-circle-right"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="caixa_info_full">
            <div class="caixa_painel caixa_painel_full aprovado" data-bs-toggle="modal" data-bs-target="#MobileModal">
                <div class="informacoes_caixa">
                    <h2>Produto</h2>
                </div>
                <div class="caixa_mais_informacoes">
                    <div class="mais_informacoes">
                        <p>Cadastrar</p>
                        <i class="fa-solid fa-circle-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="mobile_footer">
    <p>Todos os direitos reservados</p>
</footer>

<!-- Modal Produto -->
<div class="modal fade" id="MobileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastrar Produto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nome do Produto</label>
                    <input type="email" class="form-control" placeholder="Ex: Ração porte grande adulto" />
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Marca</label>
                    <input type="email" class="form-control" placeholder="Ex: Pedigree" />
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Preço</label>
                    <div class="input-group">
                        <span class="input-group-text">Necessário R$ e Vírgula 0,00</span>
                        <input type="text" aria-label="First name" class="form-control" />
                    </div>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Imagem do Produto</label>
                    <input class="form-control" type="file" id="formFile" />
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Categoria</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Selecione uma Categoria</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Medida</label>
                    <input type="email" class="form-control" placeholder="Ex: A cada 100g" />
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Cadastrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Categoria -->
<div class="modal fade" id="MobileModalCat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastrar Categoria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Categoria</label>
                    <input type="email" class="form-control" placeholder="Ex: Ração para Cachorro" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Cadastrar</button>
            </div>
        </div>
    </div>
</div>