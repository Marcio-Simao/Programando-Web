<?php SESSION_START();?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 011 Capítulo 04</title>
</head>
<body>
    <!--  Desafio: Usando os mesmos conceitos que vimos até agora, monte uma lista de contatos na qual devem ser cadastrados o nome, o telefone e o e-mail de cada contato. -->
    <h1>Lista de contactos</h1>

    <form action="">
        <fieldset>
            <legend>Lista de contactos</legend>  
                <label>
                    <strong>Nome</strong> <br>
                    <input type="text" name="nome" require>
                </label>  
                <br> <br>
                <label>
                    <strong>Número de Telefone</strong> <br>
                    <input type="number" name="num_tel" require>
                </label>

                <br> <br>

                <label>
                    <strong>Email</strong> <br>
                    <input type="email" name="email" require>
                </label>
                <br> <br>
                <input type="submit" value="Cadastrar">
        </fieldset>  
    </form>
    
    <?php 
        if (isset($_GET['nome']) && isset($_GET['num_tel']) && isset($_SESSION['email'])) 
        {
            $novocadastro = [ 
                "nome" => $_GET['nome'], 
                "num_tel" => $_GET['num_tel'], 
                "email" => $_GET['email']
            ];
        }  
        
        if (!isset($_SESSION['lista_contacto'])) 
        {
            $_SESSION['lista_contacto'] = [];       
        }

        $_SESSION['lista_contacto'][] = $novocadastro;
    ?>
    <br> <br>

    <table>
        <tr>
            <th>Nomes</th>
            <th>Número de Telefone</th>
            <th>Email</th>
        </tr>
        <?php foreach ($lista_email as $email): ?>
        <tr>
            <td><?php echo $email ?></td>
            <td><?php echo $email ?></td>
        </tr>    
         
         <?php endforeach ?>   
    </table>
</body>
</html>