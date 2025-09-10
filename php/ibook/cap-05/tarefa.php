<?php

    session_start();
    /* Inicia a sessão para armazenar dados entre diferentes requisições do usuário */

    // Se foi enviado um valor pelo formulário (via GET)
    if (isset($_GET['nome']) && $_GET['nome'] != '')
    {
        $tar
       // Armazena a nova tarefa dentro da sessão
       $_SESSION['lista_tarefas'][] = $_GET['nome'];
    }

    // Se já existe uma lista de tarefas na sessão, carrega para a variável
    if(isset($_SESSION['lista_tarefas']))
    {
        $lista_tarefas = $_SESSION['lista_tarefas'];
    }
    else
    {
        // Cria um array vazio para as tarefas
        $lista_tarefas = array();
    }

    include "template.php"
?>
