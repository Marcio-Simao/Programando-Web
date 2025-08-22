<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 001 Capítulo 02 </title>
</head>
<body>
    <h2>Desafio: Na função date(), experimente mudar o Y para y. O que acontece?</h2>
    <?php 
        echo'Hoje é ' . date('d/m/y');
        //percebi que usando o "y" minusculo aparece apenas os dois últimos digitos do ano 
        echo'<br> agora são ' . date('H:i:s');
    ?>
</body>
</html>