<!DOCTYPE html> <!-- Define que o documento é HTML5 -->
<html lang="pt"> <!-- Define o idioma do documento como português -->
<head>
    <meta charset="UTF-8"> <!-- Suporte a acentos e caracteres especiais -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsividade -->
    <title>Desafio 006 capitulo 03</title> <!-- Título que aparece na aba do navegador -->
</head>
<body>
    <!-- Enunciado do exercício -->
    <h2>Faça uma página que exiba a hora e a frase “Bom dia”, “Boa tarde” ou “Boa
 noite”, de acordo com a hora. Use a condicional if e a função date().</h2>
    <hr>

    <?php
        // Exibe a hora atual no formato 24 horas (HH)
        echo 'São ' . date('H'); 
        echo ' Horas';

        // Condicional para verificar o horário do dia
        if (date('H') >= 0 && date('H') < 12) 
        {
            // Se a hora estiver entre 0h e 11h59 → manhã
            echo '<h4>Bom dia!</h4>';
        }
        elseif (date('H') > 11 && date('H') < 18) 
        {
            // Se a hora estiver entre 12h e 17h59 → tarde
            echo '<h4>Boa Tarde!</h4>';
        }
        else 
        {
            // Se a hora estiver entre 18h e 23h59 → noite
            echo '<h4>Boa Noite!</h4>';
        }
    ?>
</body>
</html>