<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    <!--<meta http-equiv="refresh" content="1">-->
    <title>Document</title>
</head>
<body>
    
    

<div class="quadrado">
     <center><h1>IMC</H1></center>
      <form action="index.php" method="POST">
  
        <H1><center>FAÇA O SEU CADASTRO</H1></center>
        
        <table>
            <tr>
                <td><label for="nome">NOME</label></td>
                <td><input type="text" name="nome" id="nome" required></td>
            </tr>
            
            <tr>
                <td><label for="email">EMAIL</label></td>
                <td><input type="email" name="email" id="email" required></td>
            </tr>
            <tr>
                <td><label for="senha">SENHA</label></td>
                <td><input type="password" name="senha" id="senha" minlength="8" maxlength="8" required></td>
            </tr>
            <tr>
                <td><label for="telefone">TELEFONE</label></td>
                <td><input type="tel" name="telefone" id="telefone" required placeholder="(xx) xxxxx-xxxx" minlength="10" maxlength="11"></td>
            </tr>
            
            <tr>
                <td><label for="datanascimento">DATA NASCIMENTO</label></td>
                <td><input type="date" name="datanascimento" id="datanascimento"></td>
            </tr>

            <tr>
                <td><label for="sexo">SEXO</label></td>
                <td>
                    <select name="sexo" id="sexo">
                        <option value="m">Masculino</option>
                        <option value="f">Feminino</option>
                    </select>
                </td>
            </tr>
        </table>

        <br>
        <br>
        <br>

        

          <button type="submit">Cadastrar</button>
         
          <br>
         
         <br>
         <a href="login.php">Login</a>
     
        <!-- Outros campos de formulário aqui -->
        
        <?php
        include('cadastro.php'); // Inclui o código PHP aqui
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Processamento do formulário e definição da variável $mensagem
            // ...
            // Exibição da mensagem
            echo '<p>' . $mensagem . '</p>';
          
            
        }
        ?>

</form>
</div>
       
</body>

</html>