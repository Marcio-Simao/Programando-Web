<?php session_start();?> 
<!-- Inicia a sessão para armazenar dados entre diferentes requisições do usuário -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Suporte a caracteres especiais -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Ajuste para dispositivos móveis -->
    <title>Gerenciador de Tarefas</title>
    <style>
        body{
            background-color: #4f6ab1ff; /* Cor de fundo da página */
            color: white; /* Cor do texto */
        }
    </style>
</head>
<body>
    <h1>Gerenciador de Tarefas</h1>

    <!-- Formulário para cadastrar nova tarefa -->
    <form action="">
        <fieldset>
            <legend>Nova tarefa</legend>
            <label>
                Tarefa:
                <!-- Campo de texto para inserir o nome da tarefa -->
                <input type="text" name="nome">
            </label>
            <!-- Botão para enviar o formulário -->
            <input type="submit" value="cadastrar">
        </fieldset>    
    </form>

    <?php
        // Se foi enviado um valor pelo formulário (via GET)
        if (isset($_GET['nome']))
        {
           // Armazena a nova tarefa dentro da sessão
           $_SESSION['lista_tarefas'][] = $_GET['nome'];
        }

        // Cria um array vazio para as tarefas
        $lista_tarefas = array();

        // Se já existe uma lista de tarefas na sessão, carrega para a variável
        if(isset($_SESSION['lista_tarefas']))
        {
            $lista_tarefas = $_SESSION['lista_tarefas'];
        }
    ?>

    <br>

    <!-- Tabela para exibir as tarefas cadastradas -->
    <table border="1">
        <tr>
            <th>Tarefas</th>
        </tr>
        <!-- Loop para exibir cada tarefa armazenada -->
        <?php foreach ($lista_tarefas as $tarefa) : ?>
        <tr>
            <td><?php echo $tarefa ?></td> <!-- Mostra a tarefa na tabela -->
        </tr>    
        <?php endforeach; ?>
    </table>
</body>
</html>