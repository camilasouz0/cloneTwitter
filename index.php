<?php
include_once("pages/conexao.php");
$con = getConexao();
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <base href="http://localhost/cloneTwitter/">
    <title>Twitter</title>
</head>
<body>
    <div>
    <?php
			$url = (isset($_GET['pagina'])) ? $_GET['pagina'] : 'inicio';
			$explode = array_filter(explode('/', $url));

			$pags = 'pages/';
			$ext = '.php';

			if(file_exists($pags.$explode['0'].$ext)){
				include($pags.$explode['0'].$ext);
			}else{
				if(isset($explode['0']) && !empty($explode['0'])){
					if( ! $_SESSION){
						session_start();
					}/* else{
						header("Location: sair");
					} */
					
					$nome = $explode['0'];
				
					$buscarUsuario = $con->prepare("SELECT * FROM usuario WHERE nome = :nome");
					$buscarUsuario->bindValue(':nome', $nome);
					$buscarUsuario->execute();
				
					if($buscarUsuario->rowCount()>0){
						$dado = $buscarUsuario->fetch();
						$_SESSION['nomeHome'] = $dado['nome'];
						header("Location: home");
						return true; 
					}else{
						echo 'erro 404';
						return false;
					}
				}
			}
		?>
    </div>
</body>
</html>