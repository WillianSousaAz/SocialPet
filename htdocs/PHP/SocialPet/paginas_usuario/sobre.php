<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre nós</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/ac19272455.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="../img/icon.ico" />
</head>

<body>

    <?php
    //Menu
    include_once("../incorporar_dados/globais/menu.php");
    ?>

    <div class="titulo_bg">

        <h1>Sobre nós</h1>
    </div>

    <div class="content_bg">

        <p>
            O projeto SocialPet foi criado em 2021, com uma pesquisa sobre o número de abandono de animais nas ruas,
            desde o seu inicio teve como ideia principal ajudar nossos queridos animaizinhos a ter uma vida mais digna,
            e para isso contamos com o auxilio das Ongs X que conseguem nos proporcionar a oportunidade de fazer a mediação
            entre os animais e os interessados em sua adoção ; nós temos como planejamento diminuir exponencialmente o número
            de abandono de pets, e para isso criamos uma ferramenta intuitiva, estilosa, pratica e simples de se utilizar, sendo
            assim, nunca foi tão fácil doar ou adotar um melhor amigo!
        </p>

    </div>

    <?php
    //Footer
    include_once("../incorporar_dados/globais/footer.php");
    ?>

</body>

</html>