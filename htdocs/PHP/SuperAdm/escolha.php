<?php 
    require_once 'validar_adm.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senhor escolha uma opção</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');
        @-webkit-keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; } 
        }
        @-moz-keyframes fadeIn {
            0% { opacity: 0;}
            100% { opacity: 1; }
        }
        @-o-keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }
        body{
            min-height: 95vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            -webkit-animation: fadeIn 0.8s ease-in-out;
            -moz-animation: fadeIn 0.8s ease-in-out;
            -o-animation: fadeIn 0.8s ease-in-out;
            animation: fadeIn 0.8s ease-in-out;
        }
        .central{
            display: flex;
            justify-content: space-around;
            align-items: center;
            width: 600px;
        }
        .titulo{
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .txt-title{
            font-family: 'Montserrat', sans-serif;
            font-size: 30px;
            margin-bottom: 80px;
        }
        .opcao{
            font-family: 'Montserrat', sans-serif;
            font-size: 18px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .box{
            background: rgba( 255, 255, 255, 0.25 );
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 4px );
            -webkit-backdrop-filter: blur( 4px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            z-index: 1;
        }
        .box::after{
            content: '';
            background: rgba( 35, 14, 177, 0.75 );
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 4px );
            -webkit-backdrop-filter: blur( 4px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
            width: 260px;
            height: 260px;
            border-radius: 50%;
            position: absolute;
            top: -150px;
            left: -200px;
            z-index: 0;
        }
        .box::before{
            content: '';
            background: rgba(197, 6, 133, 0.8);
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 12px );
            -webkit-backdrop-filter: blur( 12px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
            width: 260px;
            height: 260px;
            border-radius: 50%;
            position: absolute;
            top: 280px;
            left: 500px;
            z-index: 2;
        }
        input[type="radio"]{
            backdrop-filter: blur(5px); 
            background-color: rgba(255, 255, 255, 1); 
            border-radius: 50px; 
            box-shadow: 35px 35px 68px 0px rgba(145, 192, 255, 0.5), 
            inset -8px -8px 16px 0px rgba(145, 192, 255, 0.6), 
            inset 0px 11px 28px 0px rgb(255, 255, 255);
            transition: 0.3s;
            cursor: pointer;
        }
        input[type="radio"]:checked{
            backdrop-filter: blur(5px); 
            background-color: rgba(255, 255, 255, 1); 
            border-radius: 50px; 
            box-shadow: 35px 35px 68px 0px rgba( 35, 14, 177, 0.75 ), 
            inset -8px -8px 16px 0px rgba( 35, 14, 177, 0.75 ), 
            inset 0px 11px 28px 0px rgb(255, 255, 255);
            transition: 0.3s;
        }
        .box-btn{
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
        }
        .btn{
            width: 150px;
            height: 40px;
            background: rgba( 71, 20, 185, 0.7 );
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 16.5px );
            -webkit-backdrop-filter: blur( 16.5px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
            color: white;
            font-family: 'Montserrat', sans-serif;
            transition: 0.3s;
            cursor: pointer;
        }
        .btn:hover{
            background: rgba( 72, 5, 231, 1 );
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 17.5px );
            -webkit-backdrop-filter: blur( 17.5px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
            transition: 0.3s;
        }
    </style>
</head>
<body>
    <div class="box">
        <div class="titulo">
            <div class="txt-title">
                Como gostaria de ser chamado ?
            </div>
        </div>
        <form action="retorno.php" method="POST">
            <div class="central">
                <div class="opcao">
                    Willian
                    <input type="radio" name="op" value="Willian">
                </div>
                <div class="opcao">
                    Firmino
                    <input type="radio" name="op" value="Firmino">
                </div>
                <div class="opcao">
                    Mestre
                    <input type="radio" name="op" value="Mestre">
                </div>
            </div>
            <div class="box-btn">
                <input class="btn" type="submit" value="Escolhido">
            </div>
        </form>
    </div>
    
</body>
</html>