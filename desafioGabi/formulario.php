<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta>
        <title>Cadastro</title>
    </head>

    <body>
        <div class="container">
            <section>
                <h1>Cadastro do Piloto</h1>
                <hr><br><br>

                <form method="post" action="create_stmt.php">Conhece um novo piloto? Cadastre aqui:<br><br><br>
                    <label>Nome: </label>
                    <input type="text" name="piloto" class="campo" maxlenght="40" required autofocus><br>
                    <br><br><br>
                    <label>Veiculo: </label>
                    <input type="text" name="veiculo" class="campo" maxlenght="40" required ><br>
                    <br><br><br>
                    <input name ="enviaForm" type="submit" value="Cadastrar">
                </form> 
            </section>
        </body>
</html>