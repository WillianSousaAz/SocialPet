<?php

require "pet.model.php";
require "servicos.php";
require "conexao.php";

$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;
#$acao2 = isset($_GET['acao2']) ? $_GET['acao2'] : $acao2;

/*if($acao2 == 'recuperarEstados') {
        $pet = new Pet();
        $conexao = new Conexao();

        $servico = new BancoService($conexao, $pet);
        $estados = $servico-> recuperarEstados();
    }
    */
if ($acao == 'inserir') {
    session_start();
    $pet = new Pet();
    $pet->__set('nomeAnimal', $_POST['nomePet']);
    $pet->__set('especie', $_POST['especie']);
    $pet->__set('sexo', $_POST['sexo']);
    $pet->__set('raca', $_POST['raca']);
    $pet->__set('idade', $_POST['idade']);
    $pet->__set('descricao', $_POST['historia']);
    $pet->__set('Whatsapp', $_POST['Whatsapp']);
    $pet->__set('Email', $_POST['Email']);
    $pet->__set('id_dono', $_POST['id_user']);
    $pet->__set('nomeDoador', $_POST['nome']);
    $pet->__set('telefone', $_POST['telefone']);
    $pet->__set('rua', $_POST['Rua']);
    $pet->__set('bairro', $_POST['Bairro']);
    $pet->__set('cidade', $_POST['Cidade']);
    $pet->__set('estado', $_POST['Estado']);
    $pet->__set('cep', $_POST['CEP']);
    $pet->__set('img', $_POST['img']);
    $pet->__set('deficiencia', $_POST['deficiencia']);
    $pet->__set('castrado', $_POST['castrado']);
    $pet->__set('vacinas', $_POST['vacinas']);
    $conexao = new Conexao();

    $servicos = new BancoService($conexao, $pet);

    $servicos->inserir();

    header('Location: ../1-4-13/1-4-13.php');
} else if ($acao == 'recuperar') {
    $pet = new Pet();
    $conexao = new Conexao();

    $servico = new BancoService($conexao, $pet);
    $estados = $servico->recuperarEstado();
    $pets = $servico->recuperar();
} else if ($acao == 'recuperarPets') {
    $pet = new Pet();
    $pet->__set('estado', $_GET['estado']);
    $conexao = new Conexao();

    $servico = new BancoService($conexao, $pet);
    $cidades = $servico->recuperarCidade();
    $pets = $servico->recuperarPets();
} else if ($acao == 'recuperarPetsC') {
    $pet = new Pet();
    $pet->__set('cidade', $_GET['cidade']);
    $conexao = new Conexao();

    $servico = new BancoService($conexao, $pet);
    $estados = $servico->recuperarEstado();
    $pets = $servico->recuperarPetsC();
} else if ($acao == 'recuperarMeus') {
    $pet = new Pet();
    $conexao = new Conexao();
    $servico = new BancoService($conexao, $pet);
    $pets = $servico->recuperarMeus();
} else if ($acao == 'remover') {
    $pet = new Pet();
    $pet->__set('id', $_GET['id']);

    $conexao = new Conexao();

    $servicos = new BancoService($conexao, $pet);
    $servicos->remover();
    header('Location: ../1-4-13/5-24-3.php');
} else if ($acao == 'atualizar') {
    $pet = new Pet();
    $pet->__set('id', $_POST['id']);
    $pet->__set('status', $_POST['status']);
    $conexao = new Conexao();

    $servicos = new BancoService($conexao, $pet);

    if ($servicos->atualizar()) {
        header('Location: ../1-4-13/1-4-13.php');
    }
} else if ($acao == 'atualizarDoado') {
    $pet = new Pet();
    $pet->__set('id', $_POST['id']);
    $pet->__set('status', $_POST['status']);
    $conexao = new Conexao();

    $servicos = new BancoService($conexao, $pet);

    if ($servicos->atualizar()) {
        header('Location: meuspets.php');
    }
}
