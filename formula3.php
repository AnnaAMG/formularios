<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $pesquisa = htmlspecialchars($_GET['pesquisa']);
    
    

    echo "<h1>Cadastro Realizado com sucesso</h1>";
    echo "<p> Pesquisa: $pesquisa</p>";
    
    
} else {
    echo "<h1>Acesso Inválido</h1>";
    echo "<p>Por favor, envie o formulário corretamente.</p>";
}


?>