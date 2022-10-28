<?php 
    $acao = 'recuperar';
    require 'controle_pet.php';
    require_once 'validar_adm.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" type="image/png" href="../img/icon.ico"/>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../css/adm.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/ac19272455.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php
            require_once("menu-lateral/painel-esq.php");
        ?>
        <div class="painel-direito">
            <div class="itens-direito">
                <?php
                    require_once("adm_name.php")
                ?>
                <div class="search">
                    <dl class="row">
                        <dt class="col-sm-9">
                            <h2>Aprovação de novos pedidos</h2>
                        </dt>
                        <dd>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping"> <i class="fa-solid fa-magnifying-glass"></i> </span>
                                <input type="text" class="form-control" placeholder="Pesquisar" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="centralizador-painel-principal">
                <div class="painel-principal">
                    <div class="op-status">
                        <p>Nome</p>
                        <p>Foto</p>
                        <p>Descrição</p>
                        <p>Ação</p>
                    </div>

                        <?php foreach($pets as $indice => $pet) { ?>
                        <form action="controle_animais.php?acao=atualizar" method="POST">

                        <!-- Sessão user  -->
                        <div class="conteudo-op2">
                            <div class="animal-nome"><?= $pet->NomeAnimal?></div>
                            <div class="animal-fotos">
                                <div class="lista-1">
                                    <img class="img-1 img-animal" src="../incorporar_dados/doar/upload/<?= $pet->img?>"> 
                                </div>
                            </div>
                            <div class="animal-desc"><?= $pet->Descricao?></div>
                            <div class="animal-acao">
                                <div class="img-funcoes2">
                                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#detalhes<?= $pet->ID_Animal ?>">Ampliar</button>                           
                                </div>
                            </div>
                        </div>

                        <!--Modal em bootstrap--> 
                        <!-- Modal -->

                <div class="modal fade" id="detalhes<?= $pet->ID_Animal ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detalhes do Pet</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                        <div class="modal-body">
                            <dl class="row">

                                <figure class="text-center">
                                <blockquote class="blockquote">
                                    <p>Dados do Pet</p>
                                </blockquote>
                                </figure>

                                <br>

                            <dt class="col-sm-2">Id:</dt>
                            <dd class="col-sm-9">
                            <div class="input-group mb-3">
                                <input type="text" name="id" class="form-control" value="<?= $pet->ID_Animal ?>" readonly>
                            </div>
                            </dd>

                            <dt class="col-sm-2">Nome:</dt>
                            <dd class="col-sm-9">
                            <div class="input-group mb-3">
                                <input type="text" name="nomePet" class="form-control" value="<?= $pet->NomeAnimal?>" readonly>
                            </div>
                            </dd>

                            <dt class="col-sm-2">Espécie:</dt>
                            <dd class="col-sm-9">
                                <div class="input-group mb-3">
                                    <input type="text" name="especie" class="form-control" aria-label="Username" value="<?= $pet->Especie?>" readonly>
                                </div>
                            </dd>

                            <dt class="col-sm-2">Sexo:</dt>
                            <dd class="col-sm-9">
                                <div class="input-group mb-3">
                                    <input type="text" name="sexo" class="form-control" aria-label="Username" value="<?= $pet->sexo?>" readonly>
                                </div>
                            </dd>

                            <dt class="col-sm-2">Raça:</dt>
                            <dd class="col-sm-9">
                                <div class="input-group mb-3">
                                    <input type="text" name="raca" class="form-control" aria-label="Username" value="<?= $pet->Raca?>">
                                </div>      
                            </dd>

                            <dt class="col-sm-2">Deficiência:</dt>
                            <dd class="col-sm-9">
                                <div class="input-group mb-3">
                                    <input type="text" name="deficiencia" class="form-control" aria-label="Username" value="<?= $pet->Deficiencia?>">
                                </div>      
                            </dd>

                            <dt class="col-sm-2">Castrado:</dt>
                            <dd class="col-sm-9">
                                <div class="input-group mb-3">
                                    <input type="text" name="castrado" class="form-control" aria-label="Username" value="<?= $pet->Castrado?>" readonly>
                                </div>      
                            </dd>

                            <dt class="col-sm-2">Vacinas:</dt>
                            <dd class="col-sm-9">
                                <div class="input-group mb-3">
                                    <input type="text" name="vacinas" class="form-control" aria-label="Username" value="<?= $pet->Vacinas?>">
                                </div>      
                            </dd>
                            
                            <dt class="col-sm-2">Idade:</dt>
                            <dd class="col-sm-9">
                                <div class="input-group mb-3">
                                    <input type="text" name="idade" class="form-control" aria-label="Username" value="<?= $pet->Idade?>" readonly>
                                </div>
                            </dd>

                            <dt class="col-sm-2">Foto:</dt>
                            <dd class="col-sm-9">
                                <img class="img-thumbnail border-0" width="200px" src="../incorporar_dados/doar/upload/<?= $pet->img?>"> 
                            </dd>
                            <dt class="col-sm-2">Foto Url :</dt>
                            <dd class="col-sm-9">
                                <div class="input-group mb-3">
                                    <input type="text" name="img" class="form-control" aria-label="Username" value="<?= $pet->img?>" readonly>
                                </div>
                            </dd>

                            <dt class="col-sm-2">Descrição:</dt>
                            <dd class="col-sm-9">
                                <div class="input-group mb-3">
                                    <textarea name="historia" class="form-control" class="form-control" aria-label="With textarea"><?= $pet->Descricao?></textarea>
                                </div> 
                            </dd>

                            <dt class="col-sm-2">Status:</dt>
                            <dd class="col-sm-9">
                                <div class="input-group mb-3">
                                    <select name="status" class="form-select" required>
                                        <option value="" selected><?= $pet->Status?></option>
                                        <option value="Aprovado">Aprovar</option>
                                        <option value="Recusado">Recusar</option>
                                    </select>
                                </div>
                            </dd>

                            <br>

                            <figure class="text-center">
                            <blockquote class="blockquote">
                                <p>Dados do Doador</p>
                            </blockquote>
                            </figure>

                            <dt class="col-sm-2">Id:</dt>
                            <dd class="col-sm-9">
                                <div class="input-group mb-3">
                                    <input type="text" name="id_user" class="form-control" aria-label="Username" value="<?= $pet->cadcliente_ID_Usuario?>" readonly>
                                </div>  
                            </dd>

                            <dt class="col-sm-2">Nome:</dt>
                            <dd class="col-sm-9">
                                <div class="input-group mb-3">
                                    <input type="text" name="nome" class="form-control" aria-label="Username" value="<?= $pet->NomeDoador?>" readonly>
                                </div> 
                            </dd>

                            <dt class="col-sm-2">Telefone:</dt>
                            <dd class="col-sm-9">
                                <div class="input-group mb-3">
                                    <input type="text" name="telefone" class="form-control" aria-label="Username" value="<?= $pet->Telefone?>" readonly>
                                </div> 
                            </dd>

                            <dt class="col-sm-2">Whatsapp:</dt>
                            <dd class="col-sm-9">
                                <div class="input-group mb-3">
                                    <input type="text" name="Whatsapp" class="form-control" aria-label="Username" value="<?= $pet->Whatsapp?>" readonly>
                                </div> 
                            </dd>

                            <dt class="col-sm-2">Email:</dt>
                            <dd class="col-sm-9">
                                <div class="input-group mb-3">
                                    <input type="text" name="Email" class="form-control" aria-label="Username" value="<?= $pet->Email?>" readonly>
                                </div> 
                            </dd>

                            <dt class="col-sm-2">Rua:</dt>
                            <dd class="col-sm-9">
                                <div class="input-group mb-3">
                                    <input type="text" name="Rua" class="form-control" aria-label="Username" value="<?= $pet->Rua?>" readonly>
                                </div> 
                            </dd>

                            <dt class="col-sm-2">Bairro:</dt>
                            <dd class="col-sm-9">
                                <div class="input-group mb-3">
                                    <input type="text" name="Bairro" class="form-control" aria-label="Username" value="<?= $pet->Bairro?>" readonly>
                                </div> 
                            </dd>

                            <dt class="col-sm-2">Cidade:</dt>
                            <dd class="col-sm-9">
                                <div class="input-group mb-3">
                                    <input type="text" name="Cidade" class="form-control" aria-label="Username" value="<?= $pet->Cidade?>" readonly>
                                </div> 
                            </dd>

                            <dt class="col-sm-2">Estado:</dt>
                            <dd class="col-sm-9">
                                <div class="input-group mb-3">
                                    <input type="text" name="Estado" class="form-control" aria-label="Username" value="<?= $pet->Estado?>" readonly>
                                </div> 
                            </dd>

                            <dt class="col-sm-2">CEP:</dt>
                            <dd class="col-sm-9">
                                <div class="input-group mb-3">
                                    <input type="text" name="CEP" class="form-control" aria-label="Username" value="<?= $pet->CEP?>" readonly>
                                </div> 
                            </dd>

                        </dl>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <input type="submit" class="btn btn-success" value="Atualizar">                
                    </div>
                    </div>
                        </div>
                        </div>
                        </form>
                        <?php } ?>
                    </div>


                    <!-- ************************************************************ -->

    </body>
</html>