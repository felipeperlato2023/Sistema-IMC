<?php

$mensagemlogin = '';

 include('conn.php');

 //&& isset($_POST["login"])

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formulário de login foi enviado
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Consulta para verificar as credenciais no banco de dados
    $sql = "SELECT idcliente,nome,senha FROM cliente WHERE email = ?"; //busca os dados atraves do email que o usuario digitou

    
    
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($idcliente,$nome,$hashed_password);
        $stmt->fetch();

        if (password_verify($senha, $hashed_password)) {

             // Senha correta, o usuário está autenticado com sucesso
             session_start();
             $_SESSION['idccliente'] = $idcliente;
             $_SESSION['nome'] = $nome;
             

             
    
            // Senha correta, o usuário está autenticado com sucesso
         $mensagemlogin = '<i class="fas fa-check-circle"></i> Login realizado com sucesso.';
         header('Location: principal.php');
        } else {

        
            $mensagemlogin = "Erro de autenticação: Credenciais inválidas.";
          
        }
    }
}
       
     else {
      $mensagemlogin = "Erro na preparação da declaração: " . $conn->error;

    }


    
    $conn->close();


?>