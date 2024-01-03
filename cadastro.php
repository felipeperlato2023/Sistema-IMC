<?php

include('conn.php');
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupere os dados do formulário
    $nome = $_POST["nome"];
    $datanascimento = $_POST["datanascimento"];
    $email = $_POST["email"];
    $senha = password_hash($_POST["senha"], PASSWORD_BCRYPT); // Hash da senha para armazenamento seguro
    $telefone = $_POST["telefone"];
    $sexo = $_POST["sexo"];
    
    $nome = strtoupper($nome);
    
  
    $sql = "INSERT INTO cliente(nome,datanascimento,email,senha,telefone,sexo) VALUES('$nome','$datanascimento','$email','$senha','$telefone','$sexo')";
    
    if ($stmt = $conn->prepare($sql)) {
       
        if ($stmt->execute()) {
            $mensagem = '<i class="fas fa-check-circle"></i> Cadastro realizado com sucesso.';
        } else {
            $mensagem = "Erro ao cadastrar: Verefique o login e tente novamente. " . $stmt->error;
        }
        $stmt->close();
    } else {
        $mensagem = "Erro na preparação da declaração: " . $conn->error;
    }
}

  



