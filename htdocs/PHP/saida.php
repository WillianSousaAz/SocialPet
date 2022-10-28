<?php
session_start();
$mensagem = $_SESSION['mensagem'];
$algoritimo = "AES-256-CBC";
$chave = "SocialPet_key_enterprise";
$iv = "wNYtCnelXfOa6uiJ";

$mensagem = openssl_decrypt(base64_decode($mensagem), $algoritimo, $chave, OPENSSL_RAW_DATA, $iv);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $mensagem; ?></h1>
</body>
</html>