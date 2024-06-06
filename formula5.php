<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n1 = htmlspecialchars($_POST['numero1']);
    $n2 = htmlspecialchars($_POST['numero2']);
    $operador = htmlspecialchars($_POST['operador']);

    
    
    switch($operador){

    case "+":
      $resultado = $n1 + $n2;
      echo "O resultado dessa operação é $n1 + $n2 = $resultado";
      break;


      case "-":
        $resultado = $n1 - $n2;
        echo "O resultado dessa operação é $n1 - $n2 = $resultado";  
        break;


        case "x":
            $resultado = $n1 * $n2;
            echo "O resultado dessa operação é $n1 x $n2 = $resultado";  
            break;


            case "/":
                if($n1 !=0 && $n2 !=0){
                   $resultado = $n1 / $n2;
                echo "O resultado dessa operação é $n1 / $n2 = $resultado";  
                 } else{
                    echo "Não é possivel dividir por zero.";
                 }
                
                break;
}

} else {

    echo "<p>Por favor, envie o formulário corretamente.</p>";
}



?>
