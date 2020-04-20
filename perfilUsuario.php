<?php
 
require 'conexao.php';// a sessao inicia na conexão com o banco
$con = getConexao();
require 'login.php';
            

if( isset($_SESSION['sessao_id']) && !empty($_SESSION['sessao_id'] && isset($_SESSION['usuarioLogado'])) ):?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
    <link rel="stylesheet" href="css/style_perfil.css">
</head>
<body>
<div class="botoesFixado">
        <nav class="botoesColuna">
            <!-- <a><img width="30" height="30" src="img/passarinho.png"></a> -->
            <a href="menu_usuario.php"><svg class="" viewbox="0 0 24 24" width="30" height="30">
                <path d="M 22.58 7.35 L 12.475 1.897 c -0.297 -0.16 -0.654 -0.16 -0.95 0 L 1.425 7.35 c -0.486 0.264 -0.667 0.87 -0.405 1.356 c 0.18 0.335 0.525 0.525 0.88 0.525 c 0.16 0 0.324 -0.038 0.475 -0.12 l 0.734 -0.396 l 1.59 11.25 c 0.216 1.214 1.31 2.062 2.66 2.062 h 9.282 c 1.35 0 2.444 -0.848 2.662 -2.088 l 1.588 -11.225 l 0.737 0.398 c 0.485 0.263 1.092 0.082 1.354 -0.404 c 0.263 -0.486 0.08 -1.093 -0.404 -1.355 Z M 12 15.435 c -1.795 0 -3.25 -1.455 -3.25 -3.25 s 1.455 -3.25 3.25 -3.25 s 3.25 1.455 3.25 3.25 s -1.455 3.25 -3.25 3.25 Z">
                </path></svg>Página Inicial</a>
            <a href="#"><svg class="" viewbox="0 0 24 24" width="30" height="30">
                <path d="M 20.585 9.468 c 0.66 0 1.2 -0.538 1.2 -1.2 c 0 -0.662 -0.54 -1.2 -1.2 -1.2 h -3.22 l 0.31 -3.547 c 0.027 -0.318 -0.07 -0.63 -0.277 -0.875 c -0.206 -0.245 -0.495 -0.396 -0.822 -0.425 c -0.65 -0.035 -1.235 0.432 -1.293 1.093 l -0.326 3.754 H 9.9 l 0.308 -3.545 c 0.06 -0.658 -0.43 -1.242 -1.097 -1.302 c -0.665 -0.05 -1.235 0.43 -1.293 1.092 l -0.325 3.754 h -3.33 c -0.663 0 -1.2 0.538 -1.2 1.2 c 0 0.662 0.538 1.2 1.2 1.2 h 3.122 l -0.44 5.064 H 3.416 c -0.662 0 -1.2 0.54 -1.2 1.2 s 0.538 1.202 1.2 1.202 h 3.22 l -0.31 3.548 c -0.057 0.657 0.432 1.24 1.09 1.3 l 0.106 0.005 c 0.626 0 1.14 -0.472 1.195 -1.098 l 0.327 -3.753 H 14.1 l -0.308 3.544 c -0.06 0.658 0.43 1.242 1.09 1.302 l 0.106 0.005 c 0.617 0 1.142 -0.482 1.195 -1.098 l 0.325 -3.753 h 3.33 c 0.66 0 1.2 -0.54 1.2 -1.2 s -0.54 -1.202 -1.2 -1.202 h -3.122 l 0.44 -5.064 h 3.43 Z m -5.838 0 l -0.44 5.063 H 9.253 l 0.44 -5.062 h 5.055 Z">
                </path></svg>Explorar</a>
            <a href="consultaBanco.php"><svg class="" viewbox="0 0 24 24" width="30" height="30">
                <path d="M 21.697 16.468 c -0.02 -0.016 -2.14 -1.64 -2.103 -6.03 c 0.02 -2.532 -0.812 -4.782 -2.347 -6.335 C 15.872 2.71 14.01 1.94 12.005 1.93 h -0.013 c -2.004 0.01 -3.866 0.78 -5.242 2.174 c -1.534 1.553 -2.368 3.802 -2.346 6.334 c 0.037 4.33 -2.02 5.967 -2.102 6.03 c -0.26 0.193 -0.366 0.53 -0.265 0.838 c 0.102 0.308 0.39 0.515 0.712 0.515 h 4.92 c 0.102 2.31 1.997 4.16 4.33 4.16 s 4.226 -1.85 4.327 -4.16 h 4.922 c 0.322 0 0.61 -0.206 0.71 -0.514 c 0.103 -0.307 -0.003 -0.645 -0.263 -0.838 Z M 12 20.478 c -1.505 0 -2.73 -1.177 -2.828 -2.658 h 5.656 c -0.1 1.48 -1.323 2.66 -2.828 2.66 Z M 4.38 16.32 c 0.74 -1.132 1.548 -3.028 1.524 -5.896 c -0.018 -2.16 0.644 -3.982 1.913 -5.267 C 8.91 4.05 10.397 3.437 12 3.43 c 1.603 0.008 3.087 0.62 4.18 1.728 c 1.27 1.285 1.933 3.106 1.915 5.267 c -0.024 2.868 0.785 4.765 1.525 5.896 H 4.38 Z">
                </path></svg>Notificações</a>
            <a href="#"><svg class="" viewbox="0 0 24 24" width="30" height="30">
                <path d="M 19.25 3.018 H 4.75 C 3.233 3.018 2 4.252 2 5.77 v 12.495 c 0 1.518 1.233 2.753 2.75 2.753 h 14.5 c 1.517 0 2.75 -1.235 2.75 -2.753 V 5.77 c 0 -1.518 -1.233 -2.752 -2.75 -2.752 Z m -14.5 1.5 h 14.5 c 0.69 0 1.25 0.56 1.25 1.25 v 0.714 l -8.05 5.367 c -0.273 0.18 -0.626 0.182 -0.9 -0.002 L 3.5 6.482 v -0.714 c 0 -0.69 0.56 -1.25 1.25 -1.25 Z m 14.5 14.998 H 4.75 c -0.69 0 -1.25 -0.56 -1.25 -1.25 V 8.24 l 7.24 4.83 c 0.383 0.256 0.822 0.384 1.26 0.384 c 0.44 0 0.877 -0.128 1.26 -0.383 l 7.24 -4.83 v 10.022 c 0 0.69 -0.56 1.25 -1.25 1.25 Z">
                </path></svg>Mensagens</a>
            <a href="#"><svg class="" viewbox="0 0 24 24" width="30" height="30">
                <path d="M 19.9 23.5 c -0.157 0 -0.312 -0.05 -0.442 -0.144 L 12 17.928 l -7.458 5.43 c -0.228 0.164 -0.53 0.19 -0.782 0.06 c -0.25 -0.127 -0.41 -0.385 -0.41 -0.667 V 5.6 c 0 -1.24 1.01 -2.25 2.25 -2.25 h 12.798 c 1.24 0 2.25 1.01 2.25 2.25 v 17.15 c 0 0.282 -0.158 0.54 -0.41 0.668 c -0.106 0.055 -0.223 0.082 -0.34 0.082 Z M 12 16.25 c 0.155 0 0.31 0.048 0.44 0.144 l 6.71 4.883 V 5.6 c 0 -0.412 -0.337 -0.75 -0.75 -0.75 H 5.6 c -0.413 0 -0.75 0.338 -0.75 0.75 v 15.677 l 6.71 -4.883 c 0.13 -0.096 0.285 -0.144 0.44 -0.144 Z">
                </path></svg>Itens salvos</a>
            <a href="#"><svg class="" viewbox="0 0 24 24" width="30" height="30">
                <path d="M 19.25 3.018 H 4.75 C 3.233 3.018 2 4.252 2 5.77 v 12.495 c 0 1.518 1.233 2.753 2.75 2.753 h 14.5 c 1.517 0 2.75 -1.235 2.75 -2.753 V 5.77 c 0 -1.518 -1.233 -2.752 -2.75 -2.752 Z m -14.5 1.5 h 14.5 c 0.69 0 1.25 0.56 1.25 1.25 v 0.714 l -8.05 5.367 c -0.273 0.18 -0.626 0.182 -0.9 -0.002 L 3.5 6.482 v -0.714 c 0 -0.69 0.56 -1.25 1.25 -1.25 Z m 14.5 14.998 H 4.75 c -0.69 0 -1.25 -0.56 -1.25 -1.25 V 8.24 l 7.24 4.83 c 0.383 0.256 0.822 0.384 1.26 0.384 c 0.44 0 0.877 -0.128 1.26 -0.383 l 7.24 -4.83 v 10.022 c 0 0.69 -0.56 1.25 -1.25 1.25 Z">
                </path></svg>Listas</a>
            <a href="perfilUsuario.php"><svg class="" viewbox="0 0 24 24" width="30" height="30">
            <path d="M 19.25 3.018 H 4.75 C 3.233 3.018 2 4.252 2 5.77 v 12.495 c 0 1.518 1.233 2.753 2.75 2.753 h 14.5 c 1.517 0 2.75 -1.235 2.75 -2.753 V 5.77 c 0 -1.518 -1.233 -2.752 -2.75 -2.752 Z m -14.5 1.5 h 14.5 c 0.69 0 1.25 0.56 1.25 1.25 v 0.714 l -8.05 5.367 c -0.273 0.18 -0.626 0.182 -0.9 -0.002 L 3.5 6.482 v -0.714 c 0 -0.69 0.56 -1.25 1.25 -1.25 Z m 14.5 14.998 H 4.75 c -0.69 0 -1.25 -0.56 -1.25 -1.25 V 8.24 l 7.24 4.83 c 0.383 0.256 0.822 0.384 1.26 0.384 c 0.44 0 0.877 -0.128 1.26 -0.383 l 7.24 -4.83 v 10.022 c 0 0.69 -0.56 1.25 -1.25 1.25 Z">
                </path></svg>Perfil</a>
            <a href="sair.php"><svg class="" viewbox="0 0 24 24" width="30" height="30">
                <path d="M 16.5 10.25 c -0.965 0 -1.75 0.787 -1.75 1.75 s 0.784 1.75 1.75 1.75 c 0.964 0 1.75 -0.786 1.75 -1.75 s -0.786 -1.75 -1.75 -1.75 Z m 0 2.5 c -0.414 0 -0.75 -0.336 -0.75 -0.75 c 0 -0.413 0.337 -0.75 0.75 -0.75 s 0.75 0.336 0.75 0.75 c 0 0.413 -0.336 0.75 -0.75 0.75 Z m -4.5 -2.5 c -0.966 0 -1.75 0.787 -1.75 1.75 s 0.785 1.75 1.75 1.75 s 1.75 -0.786 1.75 -1.75 s -0.784 -1.75 -1.75 -1.75 Z m 0 2.5 c -0.414 0 -0.75 -0.336 -0.75 -0.75 c 0 -0.413 0.337 -0.75 0.75 -0.75 s 0.75 0.336 0.75 0.75 c 0 0.413 -0.336 0.75 -0.75 0.75 Z m -4.5 -2.5 c -0.965 0 -1.75 0.787 -1.75 1.75 s 0.785 1.75 1.75 1.75 c 0.964 0 1.75 -0.786 1.75 -1.75 s -0.787 -1.75 -1.75 -1.75 Z m 0 2.5 c -0.414 0 -0.75 -0.336 -0.75 -0.75 c 0 -0.413 0.337 -0.75 0.75 -0.75 s 0.75 0.336 0.75 0.75 c 0 0.413 -0.336 0.75 -0.75 0.75 Z">
                </path>
                <path d="M 12 22.75 C 6.072 22.75 1.25 17.928 1.25 12 S 6.072 1.25 12 1.25 S 22.75 6.072 22.75 12 S 17.928 22.75 12 22.75 Z m 0 -20 C 6.9 2.75 2.75 6.9 2.75 12 S 6.9 21.25 12 21.25 s 9.25 -4.15 9.25 -9.25 S 17.1 2.75 12 2.75 Z">
                </path></svg>Sair</a>

            <div class="tweetar">
                <input type="submit" value="Tweetar">
            </div> 
        </nav>               
    </div>
    <div class="scrollUsuario">         
        <table>
            <tr>
                <th class=botaoVoltar>
                    <a class=setaVoltar href=javascript:history.back();>
                        <svg viewbox=0 0 24 24 width="30" height="30">
                            <path d="M 20 11 H 7.414 l 4.293 -4.293 c 0.39 -0.39 0.39 -1.023 0 -1.414 s -1.023 -0.39 -1.414 0 l -6 6 c -0.39 0.39 -0.39 1.023 0 1.414 l 6 6 c 0.195 0.195 0.45 0.293 0.707 0.293 s 0.512 -0.098 0.707 -0.293 c 0.39 -0.39 0.39 -1.023 0 -1.414 L 7.414 13 H 20 c 0.553 0 1 -0.447 1 -1 s -0.447 -1 -1 -1 Z">
                            </path>
                        </svg>
                    </a>
                </th>
            <?php
            echo"<th class=nomeMenu>
                    <h3>",$_SESSION['usuarioLogado'] ,"<a href=# type=submit></a></h3>
                </th>";
            ?>
            </tr>
        </table>
    </div>    
    <div class="scroll">
        <div class="headerUsuario">
            <img src="img/headerDoUsuario.jpeg">
            <div class="fotoPerfil">
                <img class="fotoDoPerfil" src="img/jovensTitas.png">
                <?php
                    echo"<th class=nomeMenu>
                            <h3>",$_SESSION['usuarioLogado'],"<a href=# type=submit></a></h3>
                        </th>
                        <th class=corLetra>
                            <div><label> @",$_SESSION['usuarioLogado'],"</label></div>
                        </th>";
                ?>
            </div>
            <div class="botaoDeEditar">
                <a class="botaoEditarPerfil" name="botaoEditarPerfil" type="submit">Editar pefil</a>   
            </div>
        </div>
    <?php
        $pegarTweets = $con -> prepare("SELECT tweet FROM post ORDER BY idTweet ASC");
        $pegarTweets->execute();
        while($mostrarTweets = $pegarTweets->fetch(PDO::FETCH_ASSOC)){
            echo "<div class=colunaTwitter><table >
                    <tr >
                        <th class=fotoUsuario>
                        </th>
    
                        <th class=corLetra>
                            <h4>",$mostrarNome['nome'],"<label> @",$_SESSION['sessao_id'],$mostrarNome['nome']," -</label></h4>
                        </th>
                    </tr>
                    <tr>
                    <td class=mostrarTweet><h4>",$mostrarTweets['tweet'],"</h4></td>
                    </tr>
                </table></div>";    
        }
    ?>
    </div> 
    <nav class="conteinerFixado"> 
        <div class="midiaSugestaoSegui">    
            <input type="text" id="txtBusca" placeholder="Buscar no Twitter"/>
            <div class="talvezVoceCurta">
                <aside class="sugestaoSeguir">
                    <h1>Talvez você curta</h1>
                    <div class="usuarioParaSeguir">
                        <form class="" method="POST" action="seguir.php" >
                            <?php
                                
                                //pega do banco de dados sugestões de usuarios para seguir (execto o do usuario logado)
                                $fulano = $_SESSION['sessao_id'];
                                //$buscarSeguidores = $con -> prepare("SELECT id, idSegue FROM seguirUsuario");

                                //("SELECT seguirUsuario.idSegue,usuario.id,
                                //CASE WHEN (seguirUsuario.idSegue IS NULL)
                                //ELSE (usuario.id <> '$fulano' LIMIT 3) END FROM seguirUsuario");

                                //(SELECT * FROM usuario
                                //        WHERE id <> '$fulano')
                                //    END FROM seguirUsuario

                                //$nomeUsuario = $con -> prepare("SELECT * FROM usuario WHERE id <> '$fulano' LIMIT 3");
                                //$nomeUsuario->execute(); 
                                
                                //SELECT seguirUsuario.idSegue, usuario.nome,usuario.id IF(seguirUsuario.idSegue NOT NULL) FROM seguirUsuario,usuario WHERE usuario.id <> '$fulano' LIMIT 3
                                $sugestoesParaSeguir = $con -> prepare("SELECT usuario.nome,usuario.id FROM usuario WHERE usuario.id <> '$fulano'");
                                $selecionaIdSegue = $con -> prepare("SELECT seguirUsuario.idSegue FROM seguirUsuario WHERE seguirUsuario.idSegue = 'id'");
                                $sugestoesParaSeguir->execute();
                                $selecionaIdSegue->execute();
                                $seguidores = $sugestoesParaSeguir->fetchAll(PDO::FETCH_ASSOC);
                                $seleciona = $selecionaIdSegue->fetch(PDO::FETCH_ASSOC);
                                $sele = $seleciona['idSegue'];
                                //if($sele != NULL){
                                    foreach ($seguidores as $mostrarPSeguir) {
                                    
                                    //echo "<div class=sugestaoParaSeguir>",$mostrarPSeguir['nome'],$_SESSION['idSugestaoSeguir']=$mostrarPSeguir['id'],$mostrarPSeguir['idSegue'],"<input value=Seguir name=seguir type=submit></div><br>";                 
                                    $nomeSujestoes = $mostrarPSeguir['nome'];
                                    $_SESSION['idSugestaoSeguir'] = $mostrarPSeguir['id'];
                                    //$idSugestao = $selec['idSegue'];
                                    
                                        //if($sele ){
                                            
                                                echo "<div class=sugestaoParaSeguir>",$nomeSujestoes,$_SESSION['idSugestaoSeguir'],"<input value=Seguir name=seguir type=submit></div><br>";

                                            
                                       // }
                                                                                                           
                                //} 
                                }
                                
                            ?>   
                        </form>                                                      
                    </div>    
                </aside> 
            </div>             
        </div>
    </nav>
</body>
</html>
<?php else:header('Location: index.php'); endif;?>