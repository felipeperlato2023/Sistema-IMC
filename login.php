<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    <!--<meta http-equiv="refresh" content="1"> -->
    <title>Login</title>
</head>
<body>
    
    

<div class="quadrado">
     <center><h1>IMC</H1></center>
      <form action="logincodigo.php" method="POST">
  
            <H1><center>FAÇA O SEU LOGIN </H1>
            <br>

          
            <br>

          <label>EMAIL</label>
          <input type="email" name="email" required>

          <p>

          <label>SENHA</label>
          <input type="password" name="senha" minlength="8"    maxlength="8" required>

          <br>
         
         <br>
         <br>
         
         <br>
          <button type="submit">Entrar</button>
         
          <br>
         
         <br>
      
     
        <!-- Outros campos de formulário aqui -->
        <?php
        include('logincodigo.php'); // Inclui o código PHP aqui
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Processamento do formulário e definição da variável $mensagem
            // ...
            // Exibição da mensagem
            echo '<p>' . $mensagemlogin . '</p>';
          
            
        }
        ?>
    

</form>
</div>
       
</body>

</html>