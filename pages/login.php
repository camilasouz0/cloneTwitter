<?php 
include_once("conexao.php");
$con = getConexao();

/*   $url = isset($_GET['url']) ? $_GET['url'] : '';
if($_GET['url'] ){ */
  if(isset($_POST['entrar'])){

//confere se email e senha existem e se são diferentes de vazio
  if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){

    $email = trim(strip_tags($_POST['email']));
    $senha = trim(strip_tags($_POST['senha']));

    $buscarUsuario = $con->prepare("SELECT * FROM usuario WHERE email = :email AND senha = :senha");
    $buscarUsuario->bindValue(':email', $email);
    $buscarUsuario->bindValue(':senha', $senha);
    $buscarUsuario->execute();

//conta quantos registros tem com esse email e senha no banco
    if($buscarUsuario->rowCount()>0){
      //$email = $_POST['email'];
      //$senha = $_POST['senha'];
      $dado = $buscarUsuario->fetch();
      //echo $dado['id']; pega o id do usuario logado na tabela do banco
      /*
      ** Criando a sessão do usuario*/
      $_SESSION['sessao_id'] = $dado['id'];
      $_SESSION['usuarioLogado'] = $dado['nome'];
      header("Location: ../menuUsuario");
      return true; 

    }else{
      echo 'Usuário e(ou) senha inválido!';
      return false;
    }

  }else{
    header("Location: inicio");
  }  

}

?>