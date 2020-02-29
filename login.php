<?php 
include_once("conexao.php");
$con = getConexao();
$email = $_POST['email'];
//$entrar = $_POST['entrar'];
$senha = $_POST['senha'];

           
    //sql="SELECT * FROM usuario WHERE email = :email AND senha = :senha";
    $buscarUsuario = $con->prepare("SELECT * FROM usuario WHERE email = :email AND senha = :senha");
    $buscarUsuario->bindValue(':email', $email);
    $buscarUsuario->bindValue(':senha', $senha);
    $buscarUsuario->execute();

    //$result = $buscarUsuario-> fetachALL(PDO::FETCH_ASSOC);
    if($buscarUsuario->rowCount()>0){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        header("Location: menu_usuario.php"); 
        } 
        else {
          echo 'Usuário e(ou) senha inválido!';
          }
?>