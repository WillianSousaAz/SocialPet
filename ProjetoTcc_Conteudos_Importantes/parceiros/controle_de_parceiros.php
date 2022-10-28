<?php

require "categoria_e_produto.php";
require "servicos.php";
require "conexao.php";

$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

if ($acao == 'inserir') {
    session_start();
    $extensao = strtolower(substr($_FILES['img']['name'], -4));
    $novo_nome = md5(time()) . $extensao;
    $diretorio = "upload/";
    move_uploaded_file($_FILES['img']['tmp_name'], $diretorio . $novo_nome);
    $usuario = new Usuario();
    $usuario->__set('id_loja', $_SESSION['id']);
    $usuario->__set('nome_produto', $_POST['nome']);
    $usuario->__set('marca', $_POST['marca']);
    $usuario->__set('img', $novo_nome);
    $usuario->__set('preco', $_POST['preco']);
    $usuario->__set('categoria', $_POST['categoria']);
    $usuario->__set('medida', $_POST['medida']);
    $usuario->__set('descricao', $_POST['descricao']);
    $usuario->__set('disponivel', $_POST['disponivel']);

    $conexao = new Conexao();

    $servicos = new BancoService($conexao, $usuario);

    $servicos->inserir();

} elseif ($acao == 'inserirCategoria') {
    session_start();
    $usuario = new Usuario();
    $usuario->__set('id_loja', $_SESSION['id']);
    $usuario->__set('nome', $_POST['nome']);

    $conexao = new Conexao();

    $servicos = new BancoService($conexao, $usuario);

    $servicos->inserirCategoria();
} else if ($acao == 'recuperar') {
    $usuario = new Usuario();
    $conexao = new Conexao();

    $servico = new BancoService($conexao, $usuario);
    if (isset($_GET['cidade'])) {
        $todos = $servico->recuperarTodos();
        $premium = $servico->recuperarPremium();
    }
} else if ($acao == 'recuperarTodos') {
    $usuario = new Usuario();
    $conexao = new Conexao();

    $servico = new BancoService($conexao, $usuario);
    if (isset($_GET['cidade'])) {
        $todos = $servico->recuperarTDComum();
        $premium = $servico->recuperarTDPremium();
    }
} else if ($acao == 'recuperarParceiro') {
    $usuario = new Usuario();
    $conexao = new Conexao();

    $servico = new BancoService($conexao, $usuario);
    $loja = $servico->recuperarLoja();
    $categoria = $servico->recuperarCategoria();
    $produtos = $servico->recuperarProdutos();
} else if ($acao == 'recuperarParceiroCat') {
    $usuario = new Usuario();
    $conexao = new Conexao();

    $servico = new BancoService($conexao, $usuario);
    $loja = $servico->recuperarLoja();
    $categoria = $servico->recuperarCat();
    $produtos = $servico->recuperarProdutosCat();
} else if ($acao == 'validar') {
    $usuario = new Usuario();
    $conexao = new Conexao();
    $senha = $_POST['senha'];

    $servico = new BancoService($conexao, $usuario);
    $parceiros = $servico->validar();

    if ($parceiros['Email'] == $_POST['email']) {
        if (password_verify($senha, $parceiros['Senha'])) {
            session_start();
            $parceiro_autenticado = true;
            $_SESSION['id'] = $parceiros['id'];
            $_SESSION['email'] = $parceiros['Email'];
            $_SESSION['cnpj'] = $parceiros['CNPJ'];
            $_SESSION['nome'] = $parceiros['NomeEmpresa'];
            $_SESSION['produtos'] = $parceiros['QuantidadeProdutos'];
            $_SESSION['funcionario'] = $parceiros['NomeFuncionario'];
            $_SESSION['cidade'] = $parceiros['CidadeLocal'];
            $_SESSION['estado'] = $parceiros['EstadoLocal'];
            $_SESSION['whatsapp'] = $parceiros['Whatsapp'];
            $_SESSION['funcoes'] = $parceiros['FuncoesDaLoja'];
            $_SESSION['status'] = $parceiros['Status'];
            $_SESSION['pagamento'] = $parceiros['dataPagamento'];
            $_SESSION['hospedagem'] = $parceiros['hospedagem'];
            $_SESSION['endereco'] = $parceiros['endereco'];
        }
    }
    if ($parceiro_autenticado) {
        $_SESSION['parceiro'] = 'SIM';
        header('Location: painel_parceiro.php');
    } else {
        $_SESSION['parceiro'] = 'NAO';
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
        } else {
            header('Location: index.php?erro=ni#abrir');
        }
    } else {
        header('Location: index.php?erro=si#abrir');
    }
}
