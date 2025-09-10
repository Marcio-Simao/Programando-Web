<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Define o conjunto de caracteres da página como UTF-8 (suporte a acentos e caracteres especiais) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Faz a página se ajustar bem em dispositivos móveis -->
    <title>Gerenciador de Tarefas</title> <!-- Título da aba do navegador -->
    <style>
        body{
            background-color: #4f6ab1ff; /* Define a cor de fundo da página */
            color: white; /* Define a cor do texto */
        }
    </style>
</head>
<body>
    <h1>Gerenciador de Tarefas</h1> <!-- Título principal exibido na página -->

    <!-- Formulário para cadastrar nova tarefa -->
    <form action=""> <!-- Formulário que envia os dados pela URL (método GET por padrão) -->
        <fieldset>
            <legend>Nova tarefa</legend> <!-- Legenda para o grupo de campos -->
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
        // Cria um array vazio de tarefas (caso não haja cookie ainda)
        $lista_tarefas = [];

        // Verifica se já existe o cookie 'lista_tarefas'
        if (isset($_COOKIE['lista_tarefas'])) {
            // Se existir, pega o conteúdo (JSON) e converte de volta para array
            $lista_tarefas = json_decode($_COOKIE['lista_tarefas'], true);
        }

        // Verifica se foi enviado algum valor no campo "nome" do formulário
        if (isset($_GET['nome']) && $_GET['nome'] != "") {
            // Adiciona a nova tarefa ao array de tarefas
            $lista_tarefas[] = $_GET['nome'];

            // Salva o array atualizado dentro de um cookie
            // json_encode transforma o array em texto JSON
            // time() + 3600 define a expiração do cookie para 1 hora a partir de agora
            setcookie('lista_tarefas', json_encode($lista_tarefas), time() + 3600);

            // Recarrega a página para evitar que a tarefa seja cadastrada duas vezes se o usuário recarregar manualmente
            header("Location: ".$_SERVER['PHP_SELF']);
            exit; // Garante que o script para aqui depois do redirecionamento
        }
    ?>

    <br>

    <!-- Tabela para exibir as tarefas cadastradas -->
    <table border="1">
        <tr>
            <th>Tarefas</th> <!-- Cabeçalho da tabela -->
        </tr>
        <!-- Loop para percorrer o array de tarefas -->
        <?php foreach ($lista_tarefas as $tarefa) : ?>
        <tr>
            <!-- Exibe cada tarefa em uma nova linha da tabela -->
            <!-- htmlspecialchars() impede a execução de código malicioso (XSS) -->
            <td><?php echo htmlspecialchars($tarefa); ?></td>
        </tr>    
        <?php endforeach; ?>
    </table>
</body>
</html>
