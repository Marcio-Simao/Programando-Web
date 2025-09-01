<!DOCTYPE html> <!-- Documento HTML5 -->
<html lang="en"> <!-- Define o idioma como inglês -->
<head>
    <meta charset="UTF-8"> <!-- Suporte a caracteres especiais -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsividade -->
    <title>Desafio 008 Capítulo 03</title> <!-- Título da aba do navegador -->
</head>
<body>
    <!-- Enunciado do desafio -->
    <h2>Desafio: Exiba os domingos em vermelho e os sábados em negrito.</h2>
    <hr>

    <?php
        // Função que imprime uma linha (semana) da tabela
        function linha($semana)
        {
            echo"<tr>"; // Inicia uma nova linha da tabela
            
            // Loop para percorrer os 7 dias da semana (0 = domingo, 6 = sábado)
            for ($i=0; $i <= 6 ; $i++) 
            {
                // Se existir um valor nesse índice da semana
                if (isset($semana[$i])) 
                {
                    // Caso seja domingo (primeira coluna = índice 0)
                    if ($i == 0) 
                    {
                        // Exibe o número em vermelho
                        echo"<td><span style='color: red;'>{$semana[$i]}</span></td>";
                    }
                    else 
                    {
                        // Caso seja sábado (última coluna = índice 6)
                        if ($i == 6) 
                        {
                            // Exibe o número em negrito
                            echo"<td><strong>{$semana[$i]}</strong></td>";    
                        }
                        else
                        {
                            // Para os outros dias da semana, exibe normalmente
                            echo"<td>{$semana[$i]}</td>";
                        }
                    } 
                }
                else 
                {
                    // Se não existir valor (semana incompleta), imprime célula vazia
                    echo"<td></td>";   
                }    
            }
            echo"</tr>"; // Fecha a linha da tabela
        }
    ?>

    <?php    
        // Função que monta todo o calendário do mês
        function calendario() 
        {
            $dia = 1;          // Começa no dia 1
            $semana = array(); // Array para armazenar os dias de uma semana
            
            // Enquanto ainda houver dias até 31
            while ($dia <= 31) 
            {
                // Adiciona o dia ao array da semana
                array_push($semana, $dia);

                // Quando completar 7 dias (semana cheia)
                if (count($semana) == 7) 
                {
                    // Chama a função linha() para imprimir a semana
                    linha($semana);
                    // Reinicia o array para começar a próxima semana
                    $semana = array();
                }
                $dia++; // Vai para o próximo dia
            }
            // Imprime a última semana (mesmo se incompleta)
            linha($semana);
        }
    ?>

    <!-- Estrutura da tabela do calendário -->
    <table border="1">
        <!-- Cabeçalho da tabela (dias da semana) -->
        <tr>
            <td>Dom</td>
            <td>Seg</td>
            <td>Ter</td>
            <td>Qua</td>
            <td>Qui</td>
            <td>Sex</td>
            <td>Sáb</td>
        </tr>    

        <!-- Chamada da função que imprime todas as semanas -->
        <?php calendario() ?>   
    </table>
</body>
</html>