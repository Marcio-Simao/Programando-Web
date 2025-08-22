<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 002 Capítulo 02 </title>
</head>
<body>
    <h2>Desafio: Você consegue exibir a hora no formato de 12 horas, am e pm?</h2>
    <?php
        echo'Hoje é ' . date('d/m/y');
        //percebi que usando o "y" minusculo aparece apenas os dois últimos digitos do ano 
        echo'<br> agora são ' . date('h:i:s');
        //usando o "h" minusculo estamos a utilizar a hora no formato AM e PM
    ?>
</body>
</html>