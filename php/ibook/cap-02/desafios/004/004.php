<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 004 do Capitulo 02</title>
</head>
<body>
    <?php
        echo'hoje é ' . date('w');
        echo' da semana ';

        $hoje = date('w');

        $sabado = date('6');

        $res_dia = $sabado - $hoje;

        echo"<br> </br>faltam $res_dia dia para sábado!";
       
    ?>
</body>
</html>