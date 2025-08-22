<!DOCTYPE html> <!-- Declara que o documento é HTML5 -->
<html lang="pt"> <!-- Define o idioma da página como português -->
<head>
    <meta charset="UTF-8"> <!-- Define a codificação de caracteres como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsividade -->
    <title>Desafio 002 Capítulo 02 </title> <!-- Título exibido na aba do navegador -->
</head>
<body>
    <h2>Desafio: Você consegue exibir a hora no formato de 12 horas, am e pm?</h2>
    <hr>

    <?php
        // Exibe a data atual no formato dia/mês/ano com dois dígitos
        echo 'Hoje é ' . date('d/m/y'); 
        
        // Observação: usando "y" minúsculo mostra apenas 2 dígitos do ano (ex: 25 para 2025)
        // Se quiser o ano completo, usa "Y" maiúsculo (ex: 2025)

        // Quebra de linha em HTML
        echo '<br>';

        // Exibe a hora atual no formato de 12 horas (01 até 12) com minutos e segundos
        echo 'Agora são ' . date('h:i:s a');  
        // "h" → hora no formato 12h
        // "i" → minutos
        // "s" → segundos
        // "a" → indica se é am ou pm (minúsculo)
        // "A" → indica AM ou PM (maiúsculo)
    ?>
</body>
</html>
