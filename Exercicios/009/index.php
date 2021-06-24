<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio-009</title>
    <style>
    body{
        font-family: Arial, Helvetica, sans-serif;
    }
    </style>
</head>
<body>
    <p>Insira seu nome e sua idade nos campos abaixo</p>
    <form action="index.php" method="get">
        <p><label for="nome">Seu nome: <input type="text" name="nome" id="nome"></label></p>
        <p><label for="idade">Sua idade: <input type="number" name="idade" id="idade" min="0" max="130"></label></p>
        <p><input type="submit" value="Enviar"></p>
    </form>
    <?php
        $nome = isset($_GET['nome']) ? $_GET['nome'] : False;
        $idade = isset($_GET['idade']) ? $_GET['idade'] : 0;
        if(is_numeric($idade)){         
            if ($idade < 0){
                echo "Uau $nome, você ainda não nasceu?";
            } else if ($idade < 18){
                echo "$nome não é maior de 18 e tem $idade Anos.";
            } else if ($idade > 18){
                echo "$nome é maior de 18 e tem $idade Anos.";
            }
        } else{
            echo "Interessante, é raro essa mensagem aparecer";
        }
    ?>
</body>
</html>