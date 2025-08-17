<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
        echo "<h1>CALENDARIO</h1>";
        echo "<hr>";

        function linha() 
        {
            echo 
            "
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            ";
        }

        function calendario()
        {
            $dia = 1;
            $semana = array();
            while($dia <= 31)
            {
                array_push($semana, $dia);

                if(count($semana) == 7)
                {
                    linha($semana);
                    $semana = array();
                }
                $dia++;
            }
        }
    ?>
    
    <table border="1">
        <tr>
            <th>Dom</th>
            <th>Seg</th>
            <th>Ter</th>
            <th>Qua</th>
            <th>Qui</th>
            <th>Sex</th>
            <th>Sab</th>
        </tr>
        <?php linha(); ?>
        <?php linha(); ?>
        <?php linha(); ?>
        <?php linha(); ?>
        <?php linha(); ?>
    </table>  
</body>
</html>