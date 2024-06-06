<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $produto = htmlspecialchars($_POST['produto']);
    $pontuacao = htmlspecialchars($_POST['pontuacao']);
    $comentarios = htmlspecialchars($_POST['comentarios']);
    

    echo "<h1>Cadastro Realizado com sucesso</h1>";
    echo "<p> Pesquisa: $produto</p>";
    echo "<p> Pesquisa: $pontuacao</p>";
    echo "<p> Pesquisa: $comentarios</p>";
    
    
    
} else {
    echo "<h1> Acesso Inválido </h1>";
    echo "<p> Por favor, preencha o formulario corretamente. </p>";
}

?>