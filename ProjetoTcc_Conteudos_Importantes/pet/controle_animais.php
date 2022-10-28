<?php

require "pet.model.php";
require "servicos.php";
require "conexao.php";

$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

if ($acao == 'inserir') {
    session_start();
    $extensao = strtolower(substr($_FILES['img']['name'], -4));
    $novo_nome = md5(time()) . $extensao;
    $diretorio = "../upload/";
    move_uploaded_file($_FILES['img']['tmp_name'], $diretorio . $novo_nome);
    $pet = new Pet();
    $pet->__set('nomeAnimal', $_POST['nomePet']);
    $pet->__set('especie', $_POST['especie']);
    $pet->__set('sexo', $_POST['sexo']);
    $pet->__set('raca', $_POST['raca']);
    $pet->__set('idade', $_POST['idade']);
    $pet->__set('email_doar', $_POST['email_doar']);
    $pet->__set('whatsapp_doar', $_POST['whatsapp_doar']);
    $pet->__set('img', $novo_nome);
    $pet->__set('descricao', $_POST['historia']);
    $pet->__set('id_dono', $_SESSION['id']);
    $pet->__set('nomeDoador', $_SESSION['nome']);
    $pet->__set('telefone', $_SESSION['telefone']);
    $pet->__set('rua', $_SESSION['Rua']);
    $pet->__set('bairro', $_SESSION['Bairro']);
    $pet->__set('cidade', $_SESSION['Cidade']);
    $pet->__set('estado', $_SESSION['Estado']);
    $pet->__set('cep', $_SESSION['CEP']);
    $pet->__set('deficiencia', $_POST['deficiencia']);
    $pet->__set('castrado', $_POST['castrado']);
    $pet->__set('vacinas', $_POST['vacinas']);
    $conexao = new Conexao();

    $servicos = new BancoService($conexao, $pet);

    $servicos->inserir();


    header('Location: ../../paginas_usuario/concluido.php');
} else if ($acao == 'recuperar') {
    $pet = new Pet();
    $conexao = new Conexao();

    $servico = new BancoService($conexao, $pet);
    $pets = $servico->recuperar();
} else if ($acao == 'remover') {
    $pet = new Pet();
    $pet->__set('id', $_GET['id']);

    $conexao = new Conexao();

    $servicos = new BancoService($conexao, $pet);
    $servicos->remover();
    header('Location: ../1-4-13/1-4-13.php');
}
