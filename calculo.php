
<?php

$idcliente = $_SESSION['idcliente']; 
$mensagemimc = '';
$categoria = '';
    


include('conn.php');
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupere os dados do formulário
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];
   
    $imc = $peso / ($altura * $altura);
    

    if ($imc < 18.5) {
        $mensagem ='<i class="fas fa-check-circle"></i> Voce está abaixo do peso. Seu imc é '. number_format($imc, 2);
        $categoria = 'Abaixo do peso';
    } elseif ($imc >= 18.5 && $imc < 24.9) {
        $mensagem ='<i class="fas fa-check-circle"></i> Voce está no peso ideal. Seu imc é '. number_format($imc, 2);
        $categoria = 'Peso ideal';
    } elseif ($imc >= 25 && $imc < 29.9) {
        $mensagem ='<i class="fas fa-check-circle"></i> Voce está acima do peso. Seu imc é '. number_format($imc, 2);
        $categoria = 'Acima do peso';
    } elseif ($imc >= 30 && $imc < 34.9) {
        $mensagem ='<i class="fas fa-check-circle"></i> Obesidade 1º grau. Seu imc é '. number_format($imc, 2);
        $categoria = 'Obesidade 1º grau';
    } elseif ($imc >= 35 && $imc < 39.9) {
        $mensagem ='<i class="fas fa-check-circle"></i> Obesidade 2º grau. Seu imc é '. number_format($imc, 2);
        $categoria = 'Obesidade 2º grau';
    } elseif($imc >=39.9) {
        $mensagem ='<i class="fas fa-check-circle"></i> Obesidade 3º grau. Seu imc é '. number_format($imc, 2);
        $categoria = 'Obesidade 3º grau';
    }
    
       else {
    
        $mensagem = "Por favor, insira seu peso e altura no formulário.";
    }

   
    $sql = "INSERT INTO imc(peso,altura,imc,categoria,idcliente) VALUES('$peso','$altura','$imc','$categoria','$idcliente')";
    
    if ($stmt = $conn->prepare($sql)) {
       
        if ($stmt->execute()) {
            $mensagemimc = '<i class="fas fa-check-circle"></i> Dados salvo com sucesso.';
            
           
        } else {
            $mensagemimc = "dados nao inseridos. " . $stmt->error;
        }
        $stmt->close();
    } else {
        $mensagemimc = "Erro na preparação da declaração: " . $conn->error;
    }
    
}
       



?>