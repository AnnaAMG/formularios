<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sexto Formulario </title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>


<body>

<style>

    body{
        background-color:  <?php echo "#808080";?>
    }
</style>

<center>

<h1> Formulario 6 </h1>
<h2>  Feedback de Produtos </h2>

<form id="seis" action="formula6.php" method="post">
<label for="produto"> <h3> Nome do produto: </h3></label>
<input type="text" id="produto" name="produto" required><br><br>

<label for="pontuacao"> <h3> Pontuação de satisfação: </h3></label>
<select id="pontuacao" name="pontuacao" required><br><br>
<option value="1"> 1 </option>
<option value="2"> 2 </option>
<option value="3"> 3 </option>
<option value="4"> 4 </option>
<option value="5"> 5 </option>

</select>

<label for="comentarios"> <h3> Comentario: </h3> </label> 
<textarea id="comentarios" name="comentarios" rows="4" cols="50"></textarea>><br>
	
<input type="submit" value="Enviar">
</form>

<div id="resultado"></div>

    <script>
        $(document).ready(function() {
            $('#seis').submit(function(event) {
                event.preventDefault(); // Evita a submissão padrão do formulário
			

                var produto = $('produto').val();
                var pontuacao = $('pontuacao').val();
                var comentarios = $('comentarios').val();

                

                // Requisição AJAX para calcular.php
                $.ajax({
                    type: 'POST',
                    url: 'formula6.php',
                    data: {
                        produto: produto,
                        pontuacao: pontuacao,
                        comentarios: comentarios
                        
                    },
                    success: function(response) {
                        $('#resultado').html('Resultado: ' + response);
                    },
                    error: function(xhr, status, error) {
                        $('#resultado').html('Erro: ' + error);
                    }
                });
            });
        });
    </script>


    
</body>
</html>