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
                    Nome: 
                    <input type="text" name="nome">
                </label>  
                <br> <br>
                <label>
                    Número de Telefone: 
                    <input type="number" name="num_tel" id="">
                </label>

                <input type="submit" value="Cadastrar">
        </fieldset>  
    </form>
</body>
</html>