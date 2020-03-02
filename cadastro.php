<?php
include_once("conexao.php");
$con = getConexao();

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confsenha  = $_POST['confsenha'];
            if ($senha == "") {	
                $mensagem = "<span class='aviso'><b>Aviso</b>: Senha não foi alterada!</span>";	
            } else if ($senha == $confsenha) {
                header('Location: index.php');
                $inserirBanco = $con -> prepare("INSERT INTO usuario (id,email, senha) VALUES (:id,:email, :senha)");
                //$inserirBanco -> bindParam(':id', $id);
                $inserirBanco -> bindParam(':email', $email);
                $inserirBanco -> bindParam(':senha', $senha);
                $inserirBanco -> execute();
            }else{
            //header('Location: cadastro_usuario.html');
            //alert('As senhas não conferem');      
            echo"<script language='javascript' type='text/javascript'>
            alert('As senhas não conferem');window.location.href='cadastro_usuario.html'</script>";
            }
?>