<?php

    session_start();

    $nomeDono = $_SESSION['nome'];
    $idDono = $_SESSION['id'];
    $numeroDono = $_SESSION['numero'];
    $ruaDono = $_SESSION['rua'];
    $bairroDono = $_SESSION['bairro'];
    $cidadeDono = $_SESSION['cidade'];
    $estadoDono = $_SESSION['estado'];

    echo "Nome do Dono : ".$nomeDono."<br>"."Id do Dono: ".$idDono."<br>"."Numero do Dono: ".$numeroDono."<br>"."Rua do Dono: ".$ruaDono."<br>"."Bairro do Dono: ".$bairroDono."<br>"."Cidade do Dono: ".$cidadeDono."<br>"."Estado do Dono: ".$estadoDono."<br>";

    $nomeDoPet = $_POST['nomePet'];
    $racaDoPet = $_POST['raca'];
    $idadeDoPet = $_POST['idade'];
    $historiaDoPet = $_POST['historia'];
    $foto1DoPet = $_POST['foto1'];
    $foto2DoPet = $_POST['foto2'];
    $foto3DoPet = $_POST['foto3'];
    $foto4DoPet = $_POST['foto4'];

    echo $nomeDoPet."<br>".$racaDoPet."<br>".$idadeDoPet."<br>".$historiaDoPet."<br>".$foto1DoPet."<br>".$foto2DoPet."<br>".$foto3DoPet."<br>".$foto4DoPet;
?>