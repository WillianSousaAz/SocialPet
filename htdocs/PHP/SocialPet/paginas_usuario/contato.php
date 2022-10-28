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

        <h1>Contato</h1>
    </div>

    <div class="content_bg">

        <p>
            Para melhorar a experencia de nossos clientes, nós da SocialPet temos uma equipe de contato para a comunicação e o auxílio nas dúvidas que se
            façam presente à qualquer momento utilizando o site SocialPet.
            <br><br>
            Temos como principais meios de contato :
        </p>

        <div class="contato_info whatsapp">
            <i class="fa-brands fa-whatsapp whtsapp wht"></i>
            <p class="num">(11) 93953-0474</p>
        </div>
        <div class="contato_info">
            <i class="fa-brands fa-facebook fb"></i>
            <p>@SocialPet</p>
        </div>
        <div class="contato_info">
            <i class="fa-brands fa-instagram ins"></i>
            <p>@aSocialPet</p>
        </div>

    </div>

    <?php
    //Footer
    include_once("../incorporar_dados/globais/footer.php");
    ?>

</body>

</html>