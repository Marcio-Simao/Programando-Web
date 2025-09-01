<!DOCTYPE html> <!-- Declara que o documento é HTML5 -->
<html lang="pt"> <!-- Define que o idioma do documento é português -->
<head>
    <meta charset="UTF-8"> <!-- Define a codificação de caracteres como UTF-8 (permite acentuação, etc.) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Ajusta a página para telas pequenas (responsividade) -->
    <title>Desafio 007 capitulo 03</title> <!-- Título que aparece na aba do navegador -->
</head>
<body>
    <h2>Desafio: Faça com que o calendário exiba o dia atual em negrito, usando a função date().</h2>
    <hr>
    <!-- Exibe a data de hoje (somente o número do dia) -->
    <h1>Hoje é dia <?php echo"" . date('d')?></h1>

    <?php
        // Função que imprime uma linha (semana) da tabela do calendário
        function linha($semana)
        {
            echo "<tr>"; // Inicia uma linha da tabela

            // Loop que percorre os 7 dias da semana
            for ($i=0; $i <= 6 ; $i++)    
            {
                // Verifica se existe um valor para o índice $i no array $semana
                if (isset($semana[$i]))  
                {
                    // Se o dia atual do array ($semana[$i]) for igual ao dia de hoje (date('d'))
                    if($semana[$i] == date('d'))
                    {
                        // Imprime o número do dia em NEGRITO
                        echo"<td><strong>{$semana[$i]}</strong></td>";    
                    }  
                    else 
                    {
                        // Caso contrário, imprime o número normalmente
                        echo"<td>{$semana[$i]}</td>";    
                    }  
                }
                else
                {
                    // Se não existir valor nesse índice (semana incompleta), imprime célula vazia
                    echo"<td></td>"; 
                }    
            }                
            echo"</tr>"; // Fecha a linha da tabela
        }
    ?>

    <?php
        // Função que constrói o calendário do mês (neste caso fixo com 31 dias)
        function calendario()
        {
            $dia = 1;              // Contador que começa em 1 (primeiro dia do mês)
            $semana = array();     // Array que vai guardar os dias de uma semana

            // Loop que gera os dias até 31
            while ($dia <= 31) {   
                array_push($semana, $dia); // Adiciona o dia atual no array da semana

                // Quando o array já tiver 7 dias (semana completa)
                if (count($semana) == 7) 
                {
                    linha($semana); // Chama a função linha() para imprimir a semana
                    $semana = array(); // Reinicia o array para começar nova semana
                }
                $dia++; // Passa para o próximo dia
            }

            // Imprime a última semana (mesmo que incompleta, com menos de 7 dias)
            linha($semana); 
        } 
    ?>

    <!-- Estrutura da tabela do calendário -->
    <table border="1"> 
        <tr>
            <td>Dom</td> <!-- Domingo -->
            <td>Seg</td> <!-- Segunda-feira -->
            <td>Ter</td> <!-- Terça-feira -->
            <td>Qua</td> <!-- Quarta-feira -->
            <td>Qui</td> <!-- Quinta-feira -->
            <td>Sex</td> <!-- Sexta-feira -->
            <td>Sáb</td> <!-- Sábado -->
        </tr>
        <!-- Chama a função que gera todas as linhas do calendário -->
        <?php calendario(); ?> 
    </table>

</body>
</html>
