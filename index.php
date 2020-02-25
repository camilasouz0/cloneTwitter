<?php 
// inclui o arquivo de inicialização
//require 'index.html';
 
// resgata variáveis do formulário
$email = isset($_POST['email']) ? $_POST['email'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';
 
define( 'host', 'localhost' );
define( 'user', 'camilasouza' );
define( 'password', 'camila123' );
define( 'database', 'dbtwitter');


try
{
    $con = new PDO( 'mysql:host=' . host . ';dbname=' . database, user, password );
}
catch ( PDOException $e )
{
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
}
 
$sql = "SELECT id, name FROM usuario WHERE email = :email AND senha = :senha";
$stmt = $con->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha', $senha);
$stmt->execute();
 
if($_POST['email']){
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  header("Location: menu_usuario.php"); 
  } 
  else {
    echo 'Usuário e(ou) senha inválido!';
    }
?>