<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 006 capitulo 03</title>
</head>
<body>
    <h2>Faça uma página que exiba a hora e a frase “Bom dia”, “Boa tarde” ou “Boa
 noite”, de acordo com a hora. Use a condicional if e a função date().</h2>
    <hr>
    <?php
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