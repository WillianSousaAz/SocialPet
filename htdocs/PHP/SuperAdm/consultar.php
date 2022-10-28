<?php 
    require_once 'validar_adm.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ac19272455.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" type="image/png" href="../../img/icon.ico"/>
    <title>Painel - Administrativo</title>
    <link rel="stylesheet" href="css/painel.css">
</head>
<body>
    <div class="painel">
        
        <?php include_once ('recursos/menu.php'); ?>

        <div class="central">
            <div class="card_box">
                <div class="name_bar">
                    <div class="control_id control">Id</div>
                    <div class="control">Nome</div>
                    <div class="control">Email</div>
                    <div class="control">IP Publico</div>
                </div>
                <div class="content">
                    <div class="contudo_repeat">
                        <div class="control_id control_text">1</div>
                        <div class="control_text">Kaique laceat quis</div>
                        <div class="control_text">adm@teste.com.br</div>
                        <div class="control_text">192.168.1.207</div>
                    </div>
                    <div class="contudo_repeat">
                        <div class="control_id control_text">2</div>
                        <div class="control_text">Kaique laceat quis</div>
                        <div class="control_text">adm@teste.com.br</div>
                        <div class="control_text">192.168.1.207</div>
                    </div>
                    <div class="contudo_repeat">
                        <div class="control_id control_text">3</div>
                        <div class="control_text">Kaique laceat quis</div>
                        <div class="control_text">adm@teste.com.br</div>
                        <div class="control_text">192.168.1.207</div>
                    </div>
                    <div class="contudo_repeat">
                        <div class="control_id control_text">4</div>
                        <div class="control_text">Kaique laceat quis</div>
                        <div class="control_text">adm@teste.com.br</div>
                        <div class="control_text">192.168.1.207</div>
                    </div>
                </div>

            </div>
        </div>

        <?php include_once ('recursos/button.php'); ?>
    </div>
</body>
</html>