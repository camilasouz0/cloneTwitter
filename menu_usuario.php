<?php require_once "index.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página Inicial/Twitter</title>
    <link rel="stylesheet" href="css/style_menu.css">
</head>
<body>
    <div class="coluna_inicial">
        <svg class="passarinho_twitter" viewbox="0 0 24 24">
            <path d="M 23.643 4.937 c -0.835 0.37 -1.732 0.62 -2.675 0.733 c 0.962 -0.576 1.7 -1.49 2.048 -2.578 c -0.9 0.534 -1.897 0.922 -2.958 1.13 c -0.85 -0.904 
            -2.06 -1.47 -3.4 -1.47 c -2.572 0 -4.658 2.086 -4.658 4.66 c 0 0.364 0.042 0.718 0.12 1.06 c -3.873 -0.195 -7.304 -2.05 -9.602 -4.868 c -0.4 0.69 -0.63 1.49 
            -0.63 2.342 c 0 1.616 0.823 3.043 2.072 3.878 c -0.764 -0.025 -1.482 -0.234 -2.11 -0.583 v 0.06 c 0 2.257 1.605 4.14 3.737 4.568 c -0.392 0.106 -0.803 0.162 
            -1.227 0.162 c -0.3 0 -0.593 -0.028 -0.877 -0.082 c 0.593 1.85 2.313 3.198 4.352 3.234 c -1.595 1.25 -3.604 1.995 -5.786 1.995 c -0.376 0 -0.747 -0.022 -1.112 
            -0.065 c 2.062 1.323 4.51 2.093 7.14 2.093 c 8.57 0 13.255 -7.098 13.255 -13.254 c 0 -0.2 -0.005 -0.402 -0.014 -0.602 c 0.91 -0.658 1.7 -1.477 2.323 -2.41 Z">              
            </path>
            <!-- <path  d="M 22.58 7.35 L 12.475 1.897 c -0.297 -0.16 -0.654 -0.16 -0.95 0 L 1.425 7.35 c -0.486 0.264 -0.667 0.87 -0.405 1.356 c 0.18 0.335 0.525 0.525 0.88 0.525 c 0.16 
            0 0.324 -0.038 0.475 -0.12 l 0.734 -0.396 l 1.59 11.25 c 0.216 1.214 1.31 2.062 2.66 2.062 h 9.282 c 1.35 0 2.444 -0.848 2.662 -2.088 l 1.588 -11.225 l 0.737 
            0.398 c 0.485 0.263 1.092 0.082 1.354 -0.404 c 0.263 -0.486 0.08 -1.093 -0.404 -1.355 Z M 12 15.435 c -1.795 0 -3.25 -1.455 -3.25 -3.25 s 1.455 -3.25 3.25 -3.25 
            s 3.25 1.455 3.25 3.25 s -1.455 3.25 -3.25 3.25 Z">
            </path> -->
        </svg>
        <div class="botoes_coluna">
            <!-- <path d="M 23.643 4.937 c -0.835 0.37 -1.732 0.62 -2.675 0.733 c 0.962 -0.576 1.7 -1.49 2.048 -2.578 c -0.9 0.534 -1.897 0.922 -2.958 1.13 c -0.85 -0.904 
            -2.06 -1.47 -3.4 -1.47 c -2.572 0 -4.658 2.086 -4.658 4.66 c 0 0.364 0.042 0.718 0.12 1.06 c -3.873 -0.195 -7.304 -2.05 -9.602 -4.868 c -0.4 0.69 -0.63 1.49 
            -0.63 2.342 c 0 1.616 0.823 3.043 2.072 3.878 c -0.764 -0.025 -1.482 -0.234 -2.11 -0.583 v 0.06 c 0 2.257 1.605 4.14 3.737 4.568 c -0.392 0.106 -0.803 0.162 
            -1.227 0.162 c -0.3 0 -0.593 -0.028 -0.877 -0.082 c 0.593 1.85 2.313 3.198 4.352 3.234 c -1.595 1.25 -3.604 1.995 -5.786 1.995 c -0.376 0 -0.747 -0.022 -1.112 
            -0.065 c 2.062 1.323 4.51 2.093 7.14 2.093 c 8.57 0 13.255 -7.098 13.255 -13.254 c 0 -0.2 -0.005 -0.402 -0.014 -0.602 c 0.91 -0.658 1.7 -1.477 2.323 -2.41 Z">              
            </path> -->
            <input type="submit" value="Página Inicial">
            <input type="submit" value="Explorar">
            <input type="submit" value="Notificações">
            <input type="submit" value="Mensagens">
            <input type="submit" value="Itens salvos">
            <input type="submit" value="Listas">
            <input type="submit" value="Perfil">
            <input type="submit" value="Mais"><br>   
        </div> 
        <div class="tweetar">
            <input type="submit" value="Tweetar">
        </div>        
    </div>
    <div class="scroll">
            <form class="postar_tweet">
                <h4>Página Inicial</h4>
                <!-- <textarea name="meu_tweet" type="text"></textarea> -->
                <input name="meu_tweet" type="text" placeholder="O que está acontecendo?"><br>
                <div class="enviar">
                    <input type="submit" value="Tweetar"><br>  
                </div>              
            </form>
    </div> 
    <div class="conteiner"> 
        <div class="buscar">    
            <input type="text" id="txtBusca" placeholder="Buscar no Twitter"/>  
        </div>        
        <!-- <img src="search3.png" id="btnBusca" alt="Buscar"/> -->
        <select class="dentro_conteiner">
            <h1>Assuntos do momento</h1>
        </select> 
    </div>
</body>
</html>