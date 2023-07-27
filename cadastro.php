<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Cadastro</title>
</head>
<body>
    <?php
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $repitaSenha = $_POST["repitaSenha"];

        if ($nome == ""){
            die("Qual seu nome?");
        }
        if ($email == ""){
            die("Por favor insira seu email");
        }
        if ($senha == ""){
            die("Você esqueceu de digitar a senha");
        }

        //teste
        echo "Prazer em te conhecer $nome";
        echo "por favor confire os dados inseridos<br>";
        echo "seu email é $email";
        echo "e sua senha é $senha";

        //abrindo banco de dados
        $con = mysqli_connect("localhost", "root", "vjv");

            mysqli_set_charset($con,"utf8");

            mysqli_select_db($con, "vjv") or               
                die("Erro na abertura do banco de dados:" .     
                    mysqli_error($con));                        

            mysqli_set_charset($con,"utf8");

            $sql="
            INSERT INTO CADASTRO(
                                    nome,
                                    email,
                                    senha,
                                    repitaSenha)   
                            VALUES(
                                    '$nome',
                                    '$email',
                                    '$senha',
                                    '$repitaSenha'
            )";

    ?>
</body>
</html>