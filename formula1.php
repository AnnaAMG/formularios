<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $idade = htmlspecialchars($_POST['idade']);

    echo "<h1>Cadastro Realizado com sucesso</h1>";
    echo "<p>Nome: $nome</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Idade: $idade </p>";
} else {
    echo "<h1>Acesso Inválido</h1>";
    echo "<p>Por favor, envie o formulário corretamente.</p>";
}


?>