<?php

require "adm.model.php";
require "servicos.php";
require "conexao.php";

$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

if ($acao == 'inserir') {
    $s_criptografada = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $adm = new Adm();
    $adm->__set('nome', $_POST['nome']);
    $adm->__set('admsuper', $_POST['admsuper']);
    $adm->__set('email', $_POST['email']);
    $adm->__set('senha', $s_criptografada);

    $conexao = new Conexao();

    $servicos = new BancoService($conexao, $adm);

    $servicos->inserir();


    header('Location: consultar.php');
} else if ($acao == 'validar') {
    $adm = new Adm();
    $conexao = new Conexao();
    $senha = $_POST['senha'];

    $servico = new BancoService($conexao, $adm);
    $adms = $servico->validar();
    if ($adms['Email'] == $_POST['email']) {
        if (password_verify($senha, $adms['Senha'])) {
            if ($adms['ADMSuper'] == "SIM") {
                $super_adm_autenticado = true;
                $_SESSION['id_adm'] = $adms['ID_ADM'];
                $_SESSION['ad_name'] = $adms['NomeFuncionario'];
                $_SESSION['nvl'] = $adms['ADMSuper'];
            } else if ($adms['ADMSuper'] == "NAO") {
                $adm_autenticado = true;
                $_SESSION['id_adm'] = $adms['ID_ADM'];
                $_SESSION['ad_name'] = $adms['NomeFuncionario'];
                $_SESSION['nvl'] = $adms['ADMSuper'];
            }
        }
    }
    if ($adm_autenticado) {
        $_SESSION['adm'] = 'SIM';
        header('Location: 1-4-13.php');
    } else if ($super_adm_autenticado) {
        $_SESSION['super_adm'] = 'SIM';
        header('Location: ../../SuperAdm/painel.php');
    } else {
        $_SESSION['adm'] = 'NAO';
        header('Location: ../paginas_usuario/login.php?login=erro');
    }
} else if ($acao == 'recuperar') {
    $adm = new Adm();
    $conexao = new Conexao();

    $servico = new BancoService($conexao, $adm);
    $adms = $servico->recuperar();
} else if ($acao == 'remover') {
    $adm = new Adm();
    $adm->__set('id', $_GET['id']);

    $conexao = new Conexao();

    $servicos = new BancoService($conexao, $adm);
    $servicos->remover();
    header('Location: remover.php');
}
