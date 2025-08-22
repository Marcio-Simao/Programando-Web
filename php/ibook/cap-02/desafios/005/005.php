<!DOCTYPE html> <!-- Documento HTML5 -->
<html lang="en"> <!-- Define o idioma da página como inglês -->
<head>
    <meta charset="UTF-8"> <!-- Define a codificação de caracteres como UTF-8 (permite acentos, cedilha, etc.) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Garante responsividade em dispositivos móveis -->
    <title>Desafio 005 Capítulo 02</title> <!-- Título que aparece na aba do navegador -->
</head>
<body>
    <!-- Enunciado do exercício -->
    <h2>Exiba também o nome do mês atual.</h2>
    <hr>

    <?php
        // Exibe a mensagem concatenada com o mês atual
        // 'date("M")' retorna o mês abreviado em inglês (Jan, Feb, Mar, etc.)
        echo ' estamos no mes de ' . date('M');
    ?>
</body>
</html>
