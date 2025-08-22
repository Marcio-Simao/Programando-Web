<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 008 Capítulo 03</title>
</head>
<body>
    <!--Desafio: Exiba os domingos em vermelho e os sábados em negrito. -->
    <?php
        function linha($semana)
        {
            echo"<tr>";
                for ($i=0; $i <= 6 ; $i++) 
                {
                    if (isset($semana[$i])) 
                    {
                        if ($semana[$i] == date('1')) 
                        {
                            echo"<td> <span style=' color: red;'> {$semana[$i]} </span> </td>";
                        }
                        else 
                        {
                            echo"<td>{$semana[$i]}</td>";   
                        } 
                    }
                    else 
                    {
                        echo"<td></td>";   
                    }    
                }
            echo"</tr>";
        }
    ?>

    <?php    
        function calendario() 
        {
            $dia = 1;
            $semana = array();
            
            while ($dia <= 31) 
            {
                array_push($semana, $dia);

                if (count($semana) == 7) 
                {
                    linha($semana);
                    $semana = array();
                }
                $dia++;
            }
            linha($semana);
        }
    ?>

    <table border="1">
        <tr>
            <td>Dom</td>
            <td>Seg</td>
            <td>Ter</td>
            <td>Qua</td>
            <td>Qui</td>
            <td>Sex</td>
            <td>Sáb</td>
        </tr>       
    </table>
</body>
</html>