<?php
    //$servidor = 'localhost';
    //$user = 'camilasouza';
    //$senha = 'camila123';
    //$banco = 'dbtwitter';

    //$conexao = mysqli_conect($servidor, $usuario, $senha, $banco);
    //$banco = mysqli_select($banco, $conexao);

define( 'host', 'localhost' );
define( 'user', 'camilasouza' );
define( 'password', 'camila123' );
define( 'database', 'dbtwitter');

function getConexao(){
    global $con;
try
{
    $con = new PDO( 'mysql:host=' . host . ';dbname=' . database, user, password );
}
catch ( PDOException $e )
{
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
    //throw new PDOException($e);
}
return $con;
}

/*if($_POST['email']){
$email = $_POST['email'];
$senha = $_POST['senha'];
$confsenha  = $_POST['confsenha'];
        

if ($senha == $confsenha) {
    header('Location: index.html');
    $inserirBanco = $con -> prepare("INSERT INTO usuario(email, senha) VALUES ('$email', '$senha')");
    $inserirBanco -> bindParam(':email', $email);
    $inserirBanco -> bindParam(':senha', $senha);
    $inserirBanco -> execute();
}else{
    //header('Location: cadastro_usuario.html');
    //alert('As senhas não conferem');      
    echo"<script language='javascript' type='text/javascript'>
    alert('As senhas não conferem');window.location
    .href='cadastro_usuario.html'</script>";
}
}*/
?>