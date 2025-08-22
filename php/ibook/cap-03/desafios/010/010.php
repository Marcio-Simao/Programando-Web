<!DOCTYPE html> <!-- Documento HTML5 -->
<html lang="pt"> <!-- Corrigi o idioma para português -->
<head>
    <meta charset="UTF-8"> <!-- Suporte a caracteres especiais -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsividade -->
    <title>Desafio 010 Capítulo 03</title> <!-- Título da aba do navegador -->
</head>
<body>
    <!-- Enunciado do desafio -->
    <h2>Desafio: E um calendário do ano todo? Será que é muito complexo?</h2>
    <hr>

    <?php
        // Função que imprime uma linha (semana) da tabela
        function linha($semana)
        {
            echo "<tr>"; // Inicia uma nova linha da tabela
            
            // Percorre os 7 dias da semana (Seg até Dom)
            for ($i = 0; $i <= 6; $i++) 
            {
                if (isset($semana[$i])) {
                    echo "<td>{$semana[$i]}</td>"; // Se existe dia, imprime
                } else {
                    echo "<td></td>"; // Se não existe, imprime vazio
                }
            }
            echo "</tr>"; // Fecha a linha da tabela
        }

        // Função que monta todo o calendário
        function calendario($inicio) 
        {
            $dia = 1;          // Começa no dia 1
            $semana = array(); // Array que guarda os dias de uma semana

            // Preenche os espaços antes do dia 1 (dependendo do início escolhido)
            for ($i = 0; $i < $inicio; $i++) {
                $semana[$i] = ""; // Coloca vazio até chegar ao dia de início
            }

            // Enquanto ainda houver dias até 31
            while ($dia <= 31) 
            {
                // Descobre a posição da semana (0 = seg, 6 = dom)
                $pos = ($inicio + $dia - 1) % 7;

                // Coloca o número do dia na posição correta
                $semana[$pos] = $dia;

                // Quando chegar ao domingo (última posição)
                if ($pos == 6) {
                    linha($semana);   // Imprime a semana
                    $semana = array(); // Reinicia a semana
                }
                $dia++;
            }

            // Se ainda restou dias não impressos (última semana incompleta)
            if (!empty($semana)) {
                linha($semana);
            }
        }
    ?>
    <h3>Janeiro de 2025</h3>
    <!-- Estrutura da tabela -->
    <table border="1">
        <!-- Cabeçalho -->
        <tr>
            <td>Seg</td>
            <td>Ter</td>
            <td>Qua</td>
            <td>Qui</td>
            <td>Sex</td>
            <td>Sáb</td>
            <td>Dom</td>
        </tr>    

        <!-- Chamada da função passando o início -->
        <?php 
            // Exemplo: se o mês começar numa quarta (índice 2 → Seg=0, Ter=1, Qua=2)
            calendario(2); 
        ?>   
    </table>

    <h3>Fevereiro de 2025</h3>
    <!-- Estrutura da tabela -->
    <table border="1">
        <!-- Cabeçalho -->
        <tr>
            <td>Seg</td>
            <td>Ter</td>
            <td>Qua</td>
            <td>Qui</td>
            <td>Sex</td>
            <td>Sáb</td>
            <td>Dom</td>
        </tr>    

        <!-- Chamada da função passando o início -->
        <?php 
            // Exemplo: se o mês começar numa quarta (índice 2 → Seg=0, Ter=1, Qua=2)
            calendario(5); 
        ?>   
    </table>

    <h3>Março de 2025</h3>
    <!-- Estrutura da tabela -->
    <table border="1">
        <!-- Cabeçalho -->
        <tr>
            <td>Seg</td>
            <td>Ter</td>
            <td>Qua</td>
            <td>Qui</td>
            <td>Sex</td>
            <td>Sáb</td>
            <td>Dom</td>
        </tr>    

        <!-- Chamada da função passando o início -->
        <?php 
            // Exemplo: se o mês começar numa quarta (índice 2 → Seg=0, Ter=1, Qua=2)
            calendario(1); 
        ?>   
    </table>
</body>
</html>