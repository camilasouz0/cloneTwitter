<?php 
require_once 'cloneTwitter/conexao.php';
$u = new usuario;
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Increva-se no Twitter</title>
</head>
<body>
    <div id="corpo-form-cad">
        <form classe="formulario_cadastro" method="POST" >
            <label class="label_1">Nome</label>
                <input name="nome" type="text" maxlength="30" required><br>
                <label class="label_2">Email</label>
                <input name="email" type="email" maxlength="40" required><br>       
                <label class="label_2">Senha</label>
                <input name="senha" type="password" maxlength="32" required><br>
                <label class="label_2">Confirmar Senha</label>
                <input name="confsenha" type="password" maxlength="32" required>    
                <input class="botao_avancar" type="submit" value="Avançar">                         
        </form> 
    </div> 
    <?php
    if(isset($_POST['nome']))
    {
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
        $confsenha = addslashes($_POST['confsenha']);

        //verificar se compo está vazio
        if(!empty($nome) && !empty($email) && !empty($senha) && !empty($confsenha))
        {
            $u->conectar("dbtwitter","localhost","camilasouza","camila123");
            if($u->$mensagemErro =="")//esta tudo ok
            {
                if($senha == $confsenha)
                {
                    $u->cadastrar($nome,$email,$senha);
                }
                else
                {
                    echo "Senha e confirma senha não correspondem";
                }
                
            }
        }
    }
    ?>            
</body>
</html>