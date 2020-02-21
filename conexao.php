<?php
    // $servidor = 'localhost';
    // $usuario = 'camilasouza';
    // $senha = 'camila123';
    // $banco = 'testando';

    // $conexao = mysqli_conect($servidor, $usuario, $senha, $banco);

    // mysql_query($conexao,"
    //     CREATE TABLE teste (
    //         id int AUTO_INCREMENT,
    //         nome varchar(16),
    //         PRIMARY KEY (id)
    //     );
    // ");

    Class usuario
    {
        private $pdo;
        public $mensagemErro = "";

        public function conectar($nome, $host, $usuraio, $senha)
        {
            global $pdo;
            try{
                $pdo = new PDO("mysql:dbname=".$nome.";host=".$host, $usuario, $senha);
            //se a conexão der erro cai aqui
            }catch (PDOException $erro){
                $mensagemErro = $erro->getMessage();
            }  
        }

        public function cadastrar($nome, $email, $senha)
        {
            global $pdo;
            //verificar se está cadastrado
            $sql = $pdo->prepare("SELECT id FROM usuario WHERE email = :e");
            $sql->bindValue(":e", $email);
            $sql->execute();

            //rowCount conta as linhas no banco de dados e vê se ja foi cadastrado
            //se rowCount retornar o id maior que zero, a pessoa está cadastrada 
            // se retorna nada não está
            if($sql->rowCount()>0){
                return false; //ja está cadastrada
            }else
            {   //caso não esteja
                $sql = $pdo->prepare("INSERT INTO usuario(nome, email, senha) VALUES (:n, :e, :s)");
                    $sql->bindValue(":n", $nome);
                    $sql->bindValue(":e", $email);
                    $sql->bindValue(":s", $senha);
                    $sql->execute();
                    return true;
            }

        }

        public function logar($email, $senha)
        {
            //verificar se o email e senha estão cadastrados, se sim
            $sql = $pdo->prepare("SELECT id FROM usuario WHERE email = :e AND senha = :s");
            $sql->bindValue(":e" ,$email);
            $sql->bindValue(":s" ,$senha);

            if($sql->rowCount()>0){
                $dado = $sql->fetch();
                session_start();
                $_SESSION['id'] = $dado['id'];
                return true;
            }
            else
            {
                return false; //não foi possivel logar
            }

        }
    }
?>