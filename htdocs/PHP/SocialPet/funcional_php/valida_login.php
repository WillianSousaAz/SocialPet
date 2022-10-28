<?php

    session_start();


    //Variavel que verifica se a auntenticação foi realizada
    $usuario_autenticado = false;

    $usuarios_app = array(
        array(
        'email' => 'adm@teste.com.br',
        'senha' => '123456',
        'id' => '1',
        'numero' => '11993279957',
        'usuario' => 'Willian de Sousa Azevedo',
        'rua' => 'Rua 15',
        'bairro' => 'Vassoura 1',
        'cidade' => 'Francisco Morato',
        'estado' => 'São Paulo'),

        array('email' => 'user@teste.com.br',
        'senha' => 'abcd',
        'usuario' => 'Caio Castro',
        'id' => '2',
        'numero' => '11993279958',
        'rua' => 'Rua 17',
        'bairro' => 'Jardim Arpoador',
        'cidade' => 'Francisco Morato',
        'estado' => 'Rio de Janeiro'),
    );

    foreach($usuarios_app as $user){
        if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
            $usuario_autenticado = true;
            $_SESSION['nome'] = $user['usuario'];
            $_SESSION['id'] = $user['id'];
            $_SESSION['numero'] = $user['numero'];
            $_SESSION['rua'] = $user['rua'];
            $_SESSION['bairro'] = $user['bairro'];
            $_SESSION['cidade'] = $user['cidade'];
            $_SESSION['estado'] = $user['estado'];
        }
    }

    if ($usuario_autenticado) {
        echo 'Usuario autenticado';
        $_SESSION['autenticado'] = 'SIM';
        header('Location: ../paginas_usuario/index.php');
    } else{
        $_SESSION['autenticado'] = 'NAO';
        header('Location: ../paginas_usuario/login.php?login=erro');
    }

    
    //print_r($_POST);

?>