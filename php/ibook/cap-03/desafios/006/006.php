<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 006 capitulo 03</title>
</head>
<body>
    <?php
        echo '<h1>Desafio 001: Saudação</h1>';
        echo '<hr>';

        echo 'São ' . date('H'); echo ' Horas';

        if (date('H') >= 0 && date('H') < 12) 
        {
            echo '<h4>Bom dia!</h4>';
        }
        elseif (date('H') > 11 && date('H') < 18) 
        {
            echo '<h4>Boa Tarde!</h4>';
        }
        else 
        {
            echo '<h4>Boa Noite!</h4>';
        }
    ?>

</body>
</html>