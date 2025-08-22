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
        function linha()
        {
            echo"<tr>";
                for ($i=0; $i <= 6 ; $i++) 
                { 
                    if ($semana[$i] == date('1')) 
                    {
                        # code...
                    }    
                }
            echo"</tr>";
        }

        function calendario() 
        {
            
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