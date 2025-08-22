<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 007 capitulo 03</title>
</head>
<body>

    <?php
        function linha($semana)
        {
            echo "<tr>";
            for ($i=0; $i <= 6 ; $i++)    
            {
                if (isset($semana[$i])) 
                {
                    echo"<td>{$semana[$i]}</td>";    
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
            while ($dia <= 31) {
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
            <td>DON</td>
            <td>SEG</td>
            <td>TER</td>
            <td>QUA</td>
            <td>QUI</td>
            <td>SEX</td>
            <td>SAB</td>
        </tr>
        <?php calendario(); ?>
    </table>

</body>
</html>