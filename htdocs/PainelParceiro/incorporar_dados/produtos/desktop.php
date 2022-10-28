<section class="lateral_d produto">
    <div class="box_titulo">
        <h1>Deseja Cadastrar :</h1>
    </div>
    <div class="group_box produto">
        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalCat">
            <div class="box_view">
                <div class="content_box">
                    <div class="text_box">
                        <p class="primary_box">Categoria</p>
                    </div>
                </div>
                <div class="more_info">
                    <p>Cadastrar</p>
                    <i class="fa-solid fa-circle-right"></i>
                </div>
            </div>
        </a>
        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <div class="box_view whatsapp">
                <div class="content_box">
                    <div class="text_box">
                        <p class="primary_box">Produto</p>
                    </div>
                </div>
                <div class="more_info">
                    <p>Cadastrar</p>
                    <i class="fa-solid fa-circle-right"></i>
                </div>
            </div>
        </a>
    </div>
    <div class="box_titulo">
        <h1>Produtos</h1>
    </div>
    <div class="controle_list">
        <div class="container text-center">
            <div class="row linha_title">
                <div class="col title">
                    Nome
                </div>
                <div class="col title">
                    Preço
                </div>
                <div class="col title">
                    Quantidade
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastrar Produto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="back_end.php?acao=inserir" method="POST">
                    <div class="row">
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">Nome do Produto</label>
                            <input type="text" name="nome" class="form-control" placeholder="Ex: Ração porte grande adulto" required />
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">Marca</label>
                            <input type="text" class="form-control" name="marca" placeholder="Ex: Pedigree" required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">Preço</label>
                            <div class="input-group">
                                <span class="input-group-text">Necessário R$ e Vírgula 0,00</span>
                                <input type="text" name="preco" aria-label="First name" value="R$ " class="form-control" required />
                            </div>
                        </div>
                        <div class="col">
                            <label for="formFile" class="form-label">Imagem do Produto</label>
                            <input class="form-control" name="img" type="file" accept="image/*" id="img" required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">Categoria</label>
                            <select class="form-select" name="categoria" aria-label="Default select example" required>
                                <option selected>Selecione uma Categoria</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">Medida</label>
                            <input type="text" name="medida" class="form-control" placeholder="Ex: A cada 100g" required />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                        <textarea class="form-control" name="descricao" id="exampleFormControlTextarea1" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <div class="form-check form-switch">
                            <input class="form-check-input" name="disponivel" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Produto Disponivel</label>
                        </div>
                    </div>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="input" class="btn btn-primary">Cadastrar</button>
            </div>
            </form>

        </div>
    </div>
</div>

<!-- Modal Categoria -->
<div class="modal fade" id="exampleModalCat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastrar Categoria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="back_end.php?acao=inserirCategoria" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Categoria</label>
                        <input type="text" class="form-control" name="nome" placeholder="Ex: Ração para Gato" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="input" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>

        </div>
    </div>
</div>