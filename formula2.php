<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = htmlspecialchars($_POST['usuario']);
    $senha = htmlspecialchars($_POST['senha']);
    

    echo "<h1>Cadastro Realizado com sucesso</h1>";
    echo "<p> Usuario: $usuario</p>";
    echo "<p> Senha: $senha</p>";
    
} else {
    echo "<h1>Acesso Inválido</h1>";
    echo "<p>Por favor, envie o formulário corretamente.</p>";
}


?>