<?php
session_start();
$string = $_POST['criptografar'];
$algoritmo = "AES-256-CBC";
$chave = "SocialPet_key_enterprise";
$iv = "wNYtCnelXfOa6uiJ";

$_SESSION['mensagem'] = openssl_encrypt($string, $algoritmo, $chave, OPENSSL_RAW_DATA, $iv);
base64_encode($_SESSION['mensagem']);
header('Location: saida.php');