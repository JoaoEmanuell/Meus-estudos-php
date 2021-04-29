<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        $txt = isset($_POST["txt"])?$_POST["txt"]:"Texto generico";
        $tams = isset($_POST["tams"])?$_POST["tams"]:"12pt";
        $cor = isset($_POST["cor"])?$_POST["cor"]:"#000000";
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integração HTML5 + PHP</title>
    <style>
        span.texto {
            font-size: <?php echo $tams; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
    <?php
    /*
        $valor = $_GET["v"];
        $r = sqrt($valor);#sqrt calcula a raiz quadrada
        echo "O valor recebido foi $valor, a sua raiz é ". number_format($r, 3, '.', '.')."<br>";
    */
    /*
    $nome = isset($_GET["nome"])?$_GET["nome"]:"Não informado";#isset verifica se o dado foi inserido, caso não tenha sido ele irá responder "Não informado"
        $ano = isset($_GET["ano"])?$_GET["ano"]:"Não informado";
        $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"Sem sexo";
        $idade = date("Y") - $ano;#date("Y") é uma função para importar o ano atual
        echo "<p>$nome nasceu no ano de $ano<br>
        É do sexo $sexo e tem $idade anos de idade</p>";
    */
        echo "<span class='texto'>$txt</span>";
    ?>
    <br><a href="index.html">Voltar</a>
</body>
</html>