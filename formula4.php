<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = htmlspecialchars($_POST['usuario']);
    $email = htmlspecialchars($_POST['email']);
    $assunto = htmlspecialchars($_POST['assunto']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    echo "<h1>Cadastro Realizado com sucesso</h1>";
    echo "<p> Pesquisa: $usuario</p>";
    echo "<p> Pesquisa: $email</p>";
    echo "<p> Pesquisa: $assunto</p>";
    echo "<p> Pesquisa: $mensagem</p>";
    
    
} else {
    echo "<h1>Acesso Inválido</h1>";
    echo "<p>Por favor, envie o formulário corretamente.</p>";
}

?>