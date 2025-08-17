<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 001 do Capitulo 2 </title>
</head>
<body>
    <?php 
        /*Questão: Nafunção date(), experimente mudar o Y para y. O que acontece? */
        echo'Hoje é ' . date('d/m/y');
        //percebi que usando o "y" minusculo aparece apenas os dois últimos digitos do ano 
        echo'<br> agora são ' . date('H:i:s');
    ?>
</body>
</html>