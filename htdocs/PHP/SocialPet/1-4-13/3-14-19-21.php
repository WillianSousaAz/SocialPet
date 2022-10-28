<?php 
    $acao = 'recuperar';
    require 'controle_de_cadastro.php';
    require_once 'validar_adm.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" type="image/png" href="../img/icon.ico"/>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consultar Usuarios</title>
        <link rel="stylesheet" href="../css/adm.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/ac19272455.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script>
            function remover(id){
                location.href = '3-14-19-21.php?acao=remover&id='+id;
            }
        </script>
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
                        <dt class="col-sm-3">
                            <h2 class="exc-pets">Consultar Usuarios</h2>
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
                        <p>Email</p>
                        <p>CPF</p>
                        <p>Ação</p>
                    </div>

                    <?php foreach($usuarios as $indice => $usuario) { ?>

                        <!-- Sessão user  -->
                        <div class="conteudo-op">
                            <div class="animal-nome"><?= $usuario->nome?></div>
                            <div class="animal-fotos"><?= $usuario->email?></div>
                            <div class="animal-desc"><?= $usuario->cpf?></div>
                            <div class="animal-acao">
                                <div class="img-funcoes">
                                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#detalhes<?= $usuario->ID_Usuario?>">Detalhes</button>                           
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#rejeitar<?= $usuario->ID_Usuario?>">Excluir</button>       
                                </div>
                            </div>
                        </div>

                        <!--Modal em bootstrap--> 
                        <!-- Modal -->

                        <div class="modal fade" id="rejeitar<?= $usuario->ID_Usuario?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Deseja excluir esse usuario ?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                Essa ação não pode ser revertida futuramente
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <button type="button" class="btn btn-danger" onclick="remover(<?= $usuario->ID_Usuario?>)">Excluir</button>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="modal fade" id="detalhes<?= $usuario->ID_Usuario?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Detalhes do Usuario</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <dl class="row">
                                    <dt class="col-sm-3">Nome:</dt>
                                    <dd class="col-sm-9"><?= $usuario->nome?></dd>

                                    <dt class="col-sm-3">Aniversario:</dt>
                                    <dd class="col-sm-9"><?= $usuario->datanascimento?></dd>

                                    <dt class="col-sm-3">Celular:</dt>
                                    <dd class="col-sm-9"><?= $usuario->telefone?></dd>
                                    
                                    <dt class="col-sm-3">CPF:</dt>
                                    <dd class="col-sm-9"><?= $usuario->cpf?></dd>

                                    <dt class="col-sm-3">Email:</dt>
                                    <dd class="col-sm-9"><?= $usuario->email?></dd>
                                    
                                    <dt class="col-sm-3">Rua:</dt>
                                    <dd class="col-sm-9"><?= $usuario->rua?></dd>

                                    <dt class="col-sm-3">N°:</dt>
                                    <dd class="col-sm-9"><?= $usuario->numero?></dd>

                                    <dt class="col-sm-3">Bairro:</dt>
                                    <dd class="col-sm-9"><?= $usuario->bairro?></dd>

                                    <dt class="col-sm-3">CEP:</dt>
                                    <dd class="col-sm-9"><?= $usuario->cep?></dd>

                                    <dt class="col-sm-3">Complemento:</dt>
                                    <dd class="col-sm-9"><?= $usuario->complemento?></dd>

                                    <dt class="col-sm-3">Cidade:</dt>
                                    <dd class="col-sm-9"><?= $usuario->cidade?></dd>

                                    <dt class="col-sm-3">Estado:</dt>
                                    <dd class="col-sm-9"><?= $usuario->estado?></dd>

                                    <dt class="col-sm-3">Pets Doados:</dt>
                                    <dd class="col-sm-9">0</dd>

                                    <dt class="col-sm-3">Pets Adotados:</dt>
                                    <dd class="col-sm-9">0</dd>

                                </dl>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <button type="button" class="btn btn-danger" onclick="remover(<?= $usuario->ID_Usuario?>)">Excluir</button>                  
                            </div>
                            </div>
                        </div>
                        </div>

                    <?php } ?>   
            </div>

            
        
    </body>
</html>