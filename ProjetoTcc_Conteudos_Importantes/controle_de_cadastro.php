<?php

require "users.model.php";
require "servicos.php";
require "conexao.php";

$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

if ($acao == 'inserir') {
    $s_criptografada = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $usuario = new Usuario();
    $usuario->__set('nome', $_POST['nome']);
    $usuario->__set('cpf', $_POST['cpf']);
    $usuario->__set('email', $_POST['email']);
    $usuario->__set('senha', $s_criptografada);
    $usuario->__set('telefone', $_POST['celular']);
    $usuario->__set('datanascimento', $_POST['nascimento']);
    $usuario->__set('rua', $_POST['rua']);
    $usuario->__set('numero', $_POST['numeroResidencia']);
    $usuario->__set('bairro', $_POST['bairro']);
    $usuario->__set('complemento', $_POST['complemento']);
    $usuario->__set('cidade', $_POST['cidade']);
    $usuario->__set('estado', $_POST['estado']);
    $usuario->__set('cep', $_POST['cep']);

    $conexao = new Conexao();

    $servicos = new BancoService($conexao, $usuario);

    try {
        $servicos->inserir();
        header('Location: ../../paginas_usuario/login.php?login=sucess');
    } catch (PDOException $e) {
        header('Location: ../../paginas_usuario/login.php?login=erro3');
    }
} else if ($acao == 'recuperar') {
    $usuario = new Usuario();
    $conexao = new Conexao();

    $servico = new BancoService($conexao, $usuario);
    $usuarios = $servico->recuperar();
} else if ($acao == 'validar') {
    $usuario = new Usuario();
    $conexao = new Conexao();
    $senha = $_POST['senha'];

    $servico = new BancoService($conexao, $usuario);
    $usuarios = $servico->validar();

    if ($usuarios['Email'] == $_POST['email']) {
        if (password_verify($senha, $usuarios['Senha'])) {
            session_start();
            $usuario_autenticado = true;
            $_SESSION['id'] = $usuarios['ID_Usuario'];
            $_SESSION['senha'] = $usuarios['Senha'];
            $_SESSION['nome'] = $usuarios['Nome'];
            $_SESSION['telefone'] = $usuarios['Telefone'];
            $_SESSION['Rua'] = $usuarios['Rua'];
            $_SESSION['Bairro'] = $usuarios['Bairro'];
            $_SESSION['Cidade'] = $usuarios['Cidade'];
            $_SESSION['Estado'] = $usuarios['Estado'];
            $_SESSION['CEP'] = $usuarios['CEP'];
        }
    }
    if ($usuario_autenticado) {
        $_SESSION['autenticado'] = 'SIM';
        header('Location: ../../paginas_usuario/index.php');
    } else {
        $_SESSION['autenticado'] = 'NAO';
        header('Location: ../../paginas_usuario/login.php?login=erro');
    }
} else if ($acao == 'remover') {
    $usuario = new Usuario();
    $usuario->__set('id', $_GET['id']);

    $conexao = new Conexao();

    $servicos = new BancoService($conexao, $usuario);
    $servicos->remover();
    header('Location: ../1-4-13/3-14-19-21.php');
} else if ($acao == 'atualizar') {
    session_start();
    $usuario = new Usuario();
    $conexao = new Conexao();
    $servicos = new BancoService($conexao, $usuario);
    $senha_autenticada = false;
    if (password_verify($_POST['senha_antiga'], $_SESSION['senha'])) {
        $senha_autenticada = true;
    }
    if ($senha_autenticada) {
        if ($_POST['senha_nova'] == $_POST['senha_nova_confirmacao']) {
            $s_criptografada = password_hash($_POST['senha_nova'], PASSWORD_DEFAULT);
            $usuario->__set('senha', $s_criptografada);
            $usuario->__set('id', $_SESSION['id']);
            if ($servicos->atualizar()) {
                header('Location: concluido.php');
            }
        }else{
            header('Location: index.php?erro=ni#abrir');
        }
    } else{
        header('Location: index.php?erro=si#abrir');
    }
}
