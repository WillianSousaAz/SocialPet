
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem Vindo</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');
        *{
            margin: 0;
            padding: 0;
        }
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
            font-family: 'Montserrat', sans-serif;
            background: url(./img/bg.jpg);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            -webkit-animation: fadeIn 0.8s ease-in-out;
            -moz-animation: fadeIn 0.8s ease-in-out;
            -o-animation: fadeIn 0.8s ease-in-out;
            animation: fadeIn 0.8s ease-in-out;
        }
        .painel{
            background: rgba( 255, 255, 255, 0.88 );
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 6px );
            -webkit-backdrop-filter: blur( 6px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
            width: 90%;
            height: 900px;
        }
        .container {
            height: 900px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .container p {
            font-size: 3rem;
            padding: 0.5rem;
            font-weight: bold;
            letter-spacing: 0.1rem;
            text-align: center;
            overflow: hidden;
        }
        .container p span.typed-text {
            font-weight: normal;
            color: #dd7732;
        }
        .container p span.cursor {
            display: inline-block;
            background-color: #ccc;
            margin-left: 0.1rem;
            width: 3px;
            animation: blink 1s infinite;
        }
        .container p span.cursor.typing {
            animation: none;
        }
        @keyframes blink {
            0%  { background-color: #ccc; }
            49% { background-color: #ccc; }
            50% { background-color: transparent; }
            99% { background-color: transparent; }
            100%  { background-color: #ccc; }
        }
        .btn{
            width: 180px;
            height: 60px;
            font-size: 20px;
            background: rgba( 221, 119, 50, 0.85 );
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 8.5px );
            -webkit-backdrop-filter: blur( 8.5px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
            cursor: pointer;
            margin-top: 20px;
            transition: 0.3s;
            color: #fff;
        }
        .btn:hover{
            background: rgba( 255, 102, 0, 0.85 );
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 8.5px );
            -webkit-backdrop-filter: blur( 8.5px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
            transition: 0.3s;
        }
    </style>
</head>
<body>
    <div class="painel">
        <div class="container">
            <p> Eu te amo<span class="typed-text"></span><span class="cursor">&nbsp;</span></p>
            <div>
                <a href="painel.php">
                    <button class="btn">Entrar</button>
                </a>
            </div>
        </div>
    </div>

    <script src="js/txt_piscante.js"></script>
</body>
</html>