<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <style type="text/css"></style>
        <link rel="stylesheet" href="css/style.css">
        <title>Twitter</title>
    </head>
    <body>
        <div class="formularios">
            <!-- <form classe="formulario_nome" method="POST"> -->
            <form classe="formulario_nome" method="POST" action="pages/login.php">
                <label class="label_1">Celular, e-mail ou nome de usuário</label>
                <input id="email" name="email" type="email" required>        
            <!-- </form>   
            <form class="formulario_senha" method="POST" action=""> -->
                <label class="label_2">Senha</label>    
                <input id="senha" name="senha" type="password" required>  
                <input class="estilo_botao_entrar" name="entrar" type="submit" value="Entrar"><br>
            </form>            
        </div>
        <a class="estilo_esqueceu_senha" href="recuperar_senha.html">Esqueceu sua senha?</a>
        <h1>
            Saiba o que está 
            acontecendo no mundo 
            agora
        </h1>
        <h3>Inscreva-se no Twitter hoje mesmo.</h3>
        <form class="formulario_cadastre-se">
            <a class="cadastre-se" type="submit" name="fazer_cadastro" href="pages/cadastro_usuario.php">Inscreva-se</a>
        </form>
    </body>
</html>