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

        <h1>Denunciar</h1>
    </div>

    <div class="content_bg">

        <p>
            A SocialPet, sempre preza pela melhor qualidade de vida dos animaizinhos, e tendo em vista que só no ano de 2021
            foram registradas 16.042 denúncias de maus tratos aos animais, o que acontece quanto aos casos que não chegam à
            conhecimento das autoridades capacitadas?
            <br><br>
            Pensando nisso, o projeto visa facilitar essa denúncia, assim, auxiliando as pessoas que não
            sabem o que fazer nestas situações à denunciar do mesmo jeito ; as denúncias podem ser feitas
            pelos meios abaixo:
        </p>

        <div class="whatsapp">
            <a href="https://api.whatsapp.com/send?phone=5511939530474" target="_blank" class="contato_info btn_info">
                <i class="fa-brands fa-whatsapp whtsapp hover"></i>
                <p class="num hover">Denunciar</p>
            </a>
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