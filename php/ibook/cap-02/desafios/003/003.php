<!DOCTYPE html> <!-- Declara que o documento é HTML5 -->
<html lang="en"> <!-- Define o idioma como inglês -->
<head>
    <meta charset="UTF-8"> <!-- Define a codificação de caracteres como UTF-8 (suporta acentos, etc.) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsividade -->
    <title>Desafio 003 Capítulo 02</title> <!-- Título da aba do navegador -->
</head>
<body>
    <!-- Enunciado do exercício -->
    <h2>Desafio: E se você tivesse que exibir o dia da semana? Como faria?</h2>
    <hr>

    <?php
        // Exibe o dia da semana abreviado em inglês (Mon, Tue, Wed, Thu, Fri, Sat, Sun)
        echo "Hoje é " . date('D'); 
    ?>
</body>
</html>
