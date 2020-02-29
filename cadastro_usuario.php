<?php
	include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Increva-se no Twitter</title>
</head>
<body>
    <div id="corpo-form-cad">
        
        <form classe="formulario_cadastro" method="POST" action="cadastro_usuario.php">
            <label class="label_1">Nome</label>
                <input name="nome" type="text" maxlength="30" ><br>
                <label class="label_2">Email</label>
                <input name="email" type="email" maxlength="40" ><br>       
                <label class="label_2">Senha</label>
                <input name="senha" type="password" maxlength="32" ><br>
                <label class="label_2">Confirmar Senha</label>
                <input name="confsenha" type="password" maxlength="32">  
                  
                <input class="botao_avancar" type="submit" value="Avançar">                         
        </form> 
    </div>  
    <?php
            
                //if($_POST['senha']){
                //$email = $_POST['email'];
                //$senha = $_POST['senha'];
                //$confsenha  = $_POST['confsenha'];
                
        
                if ($senha == $confsenha) {
                header('Location: index.php');
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
    //}
                ?>          
</body>
</html>