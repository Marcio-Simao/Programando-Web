<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 004 Capítulo 02</title>
</head>
<body>
    <h2>Exiba quantos dias faltam para o próximo sábado. Por exemplo, se hoje for
 quarta, então faltam 3 dias para sábado.</h2>
    <?php
        echo'hoje é ' . date('w');
        echo'º dia da semana ';

        $hoje = date('w');

        $sabado = date('6');

        $res_dia = $sabado - $hoje;

        echo"<br></br>faltam $res_dia dia para sábado!";  
    ?>
</body>
</html>