<!DOCTYPE html> <!-- Declaração de documento HTML5 -->
<html lang="pt"> <!-- Define o idioma da página como português -->
<head>
    <meta charset="UTF-8"> <!-- Define a codificação dos caracteres como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsividade -->
    <title>Desafio 001 Capítulo 02 </title> <!-- Título exibido na aba do navegador -->
</head>
<body>
    <h2>Desafio: Na função date(), experimente mudar o Y para y. O que acontece?</h2>
    <hr>

    <?php 
        // Exibe a data no formato dia/mês/ano com dois dígitos para o ano
        echo 'Hoje é ' . date('d/m/y');  
        // "y" (minúsculo) mostra apenas os DOIS últimos dígitos do ano → ex: "25" para 2025
        // "Y" (maiúsculo) mostra o ano COMPLETO → ex: "2025"

        // Quebra de linha em HTML
        echo '<br>';

        // Exibe a hora no formato de 24 horas (00 a 23), com minutos e segundos
        echo 'Agora são ' . date('H:i:s');  
        // "H" → hora no formato de 24h
        // "i" → minutos
        // "s" → segundos
    ?>
</body>
</html>
