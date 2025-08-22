<!DOCTYPE html> <!-- Declara que o documento é HTML5 -->
<html lang="pt"> <!-- Define que o idioma do documento é português -->
<head>
    <meta charset="UTF-8"> <!-- Define a codificação de caracteres como UTF-8 (permite acentuação, etc.) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Ajusta a página para telas pequenas (responsividade) -->
    <title>Desafio 007 capitulo 03</title> <!-- Título que aparece na aba do navegador -->
</head>
<body>

    <?php
        // Função que imprime uma linha (semana) da tabela do calendário
        function linha($semana)
        {
            echo "<tr>"; // Inicia uma linha da tabela
            for ($i=0; $i <= 6 ; $i++)    // Loop para percorrer os 7 dias da semana
            {
                if (isset($semana[$i]))  // Verifica se existe um valor no índice $i do array $semana
                {
                    echo"<td>{$semana[$i]}</td>";    // Se existir, imprime o valor dentro de uma célula da tabela
                }
                else
                {
                    echo"<td></td>"; // Se não existir (dia vazio), imprime uma célula em branco
                }    
            }                
            echo"</tr>"; // Fecha a linha da tabela
        }

    ?>

    <?php
        // Função que constrói o calendário do mês (assumindo 31 dias)
        function calendario()
        {
            $dia = 1;              // Variável que vai controlar os dias (de 1 a 31)
            $semana = array();     // Array que vai armazenar os dias de uma semana

            while ($dia <= 31) {   // Enquanto ainda houver dias do mês
                array_push($semana, $dia); // Adiciona o dia atual dentro do array $semana

                if (count($semana) == 7) // Se já tiver 7 dias no array (semana completa)
                {
                    linha($semana); // Imprime a semana na tabela
                    $semana = array(); // Reinicia o array para a próxima semana
                }
                $dia++; // Vai para o próximo dia
            }
            linha($semana); // Imprime a última semana (mesmo que incompleta)
        } 
    ?>

    <table border="1"> <!-- Cria uma tabela com borda -->
        <tr>
            <td>DON</td> <!-- Cabeçalho da tabela (domingo) -->
            <td>SEG</td> <!-- segunda-feira -->
            <td>TER</td> <!-- terça-feira -->
            <td>QUA</td> <!-- quarta-feira -->
            <td>QUI</td> <!-- quinta-feira -->
            <td>SEX</td> <!-- sexta-feira -->
            <td>SAB</td> <!-- sábado -->
        </tr>
        <?php calendario(); ?> <!-- Chama a função que gera o calendário -->
    </table>

</body>
</html>
