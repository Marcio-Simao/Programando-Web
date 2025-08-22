<!DOCTYPE html> <!-- Declara que o documento é HTML5 -->
<html lang="pt"> <!-- Define o idioma como português -->
<head>
    <meta charset="UTF-8"> <!-- Suporte a acentos -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsividade -->
    <title>Desafio 004 Capítulo 02</title> <!-- Título que aparece na aba -->
</head>
<body>
    <!-- Enunciado do exercício -->
    <h2>Exiba quantos dias faltam para o próximo sábado. Por exemplo, se hoje for
 quarta, então faltam 3 dias para sábado.</h2>
    <hr>

    <?php
        // Mostra o número do dia da semana (0 = domingo, 1 = segunda, ..., 6 = sábado)
        echo 'hoje é ' . date('w'); 
        echo 'º dia da semana ';

        // Guarda o dia da semana atual em $hoje
        $hoje = date('w');

        // Número que representa o sábado (6)
        $sabado = 6;

        // Calcula quantos dias faltam até sábado
        $res_dia = $sabado - $hoje;

        // Exibe o resultado
        echo "<br><br>faltam $res_dia dia(s) para sábado!";  
    ?>
</body>
</html>