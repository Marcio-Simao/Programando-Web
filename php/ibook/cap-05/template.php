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
            <label>
                Descrição(Opcional):
                <textarea name="descrecao"></textarea>
            </label>
            <label>
                Prazo (opcional):
                <input type="text" name="prazo">
            </label>
            <fieldset>
                <legend>Prioridade:</legend>
                <label>
                    <input type="radio" name="prioridade" value="baixa" checked>
                    baixa
                    <input type="radio" name="prioridade" value="media">
                    media
                    <input type="radio" name="prioridade" value="alta">
                    alta
                </label>
            </fieldset>
            <label>
                tarefa concluída:
                <input type="checkbox" name="concluida" value="sim">
            </label>
            <!-- Botão para enviar o formulário -->
            <input type="submit" value="cadastrar">
        </fieldset>    
    </form>

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