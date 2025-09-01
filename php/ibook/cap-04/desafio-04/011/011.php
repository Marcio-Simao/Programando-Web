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
                    <input type="text" name="nome">
                </label>  
                <br> <br>
                <label>
                    <strong>Número de Telefone</strong> <br>
                    <input type="number" name="num_tel" id="">
                </label>

                <br> <br>

                <label>
                    <strong>Email</strong> <br>
                    <input type="email" name="email" id="">
                </label>
                <br> <br>
                <input type="submit" value="Cadastrar">
        </fieldset>  
    </form>
    <?php 
        if (isset($_GET['nome'])) 
        {
            $_SESSION['lista_tarefas'][] = $_GET['nome'];    
        }
        if (isset($_GET['num_tel'])) 
        {
            $_SESSION['lista_tarefas'][] = $_GET['num_tel'];
        }
        if(isset($_SESSION['email']))
        {
            $_SESSION['lista_tarefas'][] = $_GET['email'];
        }    
        $lista_tarefas = array();
        if (isset($_SESSION['lista_tarefas'])) 
        {
            $lista_tarefas = $_SESSION['lista_tarefas'];
        }
    ?>
    <br> <br>

    <table>
        <tr>
            <th>Nomes</th>
        </tr>
        
    </table>
</body>
</html>