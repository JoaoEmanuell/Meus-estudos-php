<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For</title>
</head>
<body>
    <!--<form action="dados.php" method="post">
        <fieldset>
            <legend><label for="tab">Tabuada</label></legend>
            <select name="tab" id="tab">
                <?php
                for ($c = 1; $c <= 10; $c++){
                    echo "<option value='$c'>$c</option>";
                }
                ?>
            </select>
        </fieldset>
        <input type="submit" value="Enviar">
    </form>-->
    <form action="dados.php" method="post">
        <fieldset>
            <legend><label for="np">Numero primo</label></legend>
            <input type="number" name="np" id="np" min='1' max='1000' placeholder="Numero primo">
        </fieldset>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>