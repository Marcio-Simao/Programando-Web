<?php SESSION_START(); ?> 
<!-- Inicia a sessão para poder armazenar dados durante a navegação -->

<?php 
    // Verifica se o botão "Limpar Sessão" foi clicado
    if (isset($_GET["limpar"])) 
    {
        // Remove todas as variáveis de sessão
        session_unset();  

        // Destroi a sessão atual
        session_destroy();  

        // Redireciona o utilizador para a mesma página (011.php) para "recomeçar"
        header("Location: 011.php");  
        exit; // Garante que o código após o redirecionamento não será executado
    }
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 011 Capítulo 04</title>
</head>
<body>
    <!-- Enunciado do desafio -->
    <h1>Lista de contactos</h1>

    <!-- Formulário para cadastrar um novo contato -->
    <form method="get" action="">
        <fieldset>
            <legend>Lista de contactos</legend>  
                <label>
                    <strong>Nome</strong> <br>
                    <input type="text" name="nome" required>
                </label>  
                <br> <br>
                <label>
                    <strong>Número de Telefone</strong> <br>
                    <input type="number" name="num_tel" required>
                </label>
                <br> <br>
                <label>
                    <strong>Email</strong> <br>
                    <input type="email" name="email" required>
                </label>
                <br> <br>
                <input type="submit" value="Cadastrar">
        </fieldset>  
    </form>
    
    <?php 
        // Se os três campos (nome, telefone e email) foram preenchidos
        if (isset($_GET["nome"]) && isset($_GET["num_tel"]) && isset($_GET["email"])) 
        {
            // Cria um array com os dados do novo cadastro
            $novocadastro = [ 
                "nome" => $_GET["nome"], 
                "num_tel" => $_GET["num_tel"], 
                "email" => $_GET["email"]
            ]; 
        
            // Se a variável de sessão "lista_contacto" ainda não existe, cria como array vazio
            if (!isset($_SESSION["lista_contacto"])) 
            {
                $_SESSION["lista_contacto"] = [];       
            }

            // Adiciona o novo cadastro ao array de contatos armazenado na sessão
            $_SESSION["lista_contacto"][] = $novocadastro;
        }
    ?>
    <br> <br>

    <!-- Exibe a lista de contatos cadastrados, se houver -->
    <?php if (!empty($_SESSION["lista_contacto"])): ?>    
    <h2>Todos os cadastros armazenados</h2>
    <table border="1" cellpadding="5">
        <tr>
            <th>Nomes</th>
            <th>Número de Telefone</th>
            <th>Email</th>
        </tr>

        <!-- Percorre todos os cadastros e exibe em forma de tabela -->
        <?php foreach ($_SESSION["lista_contacto"] as $cadastro): ?>
        <tr>
            <td><?php echo $cadastro["nome"]; ?></td>
            <td><?php echo $cadastro["num_tel"]; ?></td>
            <td><?php echo $cadastro["email"]; ?></td>
        </tr>    
        <?php endforeach ?>   
    </table>

    <!-- Botão para limpar a sessão e apagar todos os contatos -->
    <form method="get" action="">
        <input type="submit" name="limpar" value="Limpar Sessão">
    </form>

    <?php endif ?>
</body>
</html>