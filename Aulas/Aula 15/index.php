<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions pt 2</title>
</head>
<body>
    <?php
        include "função.php"; #include serve para incluir uma função externa dentro do seu arquivo.
        /*function teste(&$x){
            $x = $x * 2;
            echo "
            <div>
                <span>
                    <p>
                        $x
                    </p>
                </span>
            </div>";
        }

        $a = 5;
        teste($a);
        echo "
        <div>
            <p>
                $a
            </p>
        </div>";
        */
        #testando novas funções:

        ola();
        $res = soma(6, 7);
        echo "$res";
    ?>
</body>
</html>