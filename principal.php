<?php
session_start();

if (!isset($_SESSION['idcliente'])) {
    header('Location:login.php'); // Redireciona para a página de login se o usuário não estiver autenticado
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!--<meta http-equiv="refresh" content="1">-->
    <title>IMC</title>
</head>
<body>
      <h1>Bem-Vindo <?php echo $_SESSION['nome']?></h1>
       
      
     
    <div class="imc">
    
     <center><h1>IMC </H1></center>
      <form action="calculo.php" method="POST">
         <table>
     <tr>
          <td><label>PESO</label>
          <td><input type="number" name="peso" value="<?php echo isset($_POST['peso']) ? $_POST['peso'] : ''; ?>" placeholder="00" required>
</tr>
<br>
      <tr>
         
          <td><label>ALTURA</label>
          <td><input type="number" step="0.01" name="altura" value="<?php echo isset($_POST['altura']) ? $_POST['altura'] : ''; ?>" placeholder="0.00"required>
         
</tr>

          
         
</table>

        <br>
         
         <br>
        <button type="submit">Calcular</button>
          
         
     
        <!-- Outros campos de formulário aqui -->
        
        <?php
        include('calculo.php'); // Inclui o código PHP aqui
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Processamento do formulário e definição da variável $mensagem
            // ...
            // Exibição da mensagem
            echo '<p>' . $mensagem . '</p>';
            echo '<p>' . $mensagemimc . '</p>';
            
          
            
        }
        ?>

</form>
</div>
<div class="imc2">

Aqui estão as categorias de classificação de acordo com o 
IMC para adultos no Brasil.<p>

Abaixo de 18,5: Abaixo do peso<p>
18,5 a 24,9: Peso saudável<p>
25,0 a 29,9: Sobrepeso<p>
30,0 a 34,9: Obesidade grau I<p>
35,0 a 39,9: Obesidade grau II<p>
40,0 ou superior: Obesidade grau III (mórbida)<p>


    </div>
    <div  class="a.sair">
    <a href="logout.php">Sair</a>

    <a href="imc.php">Meus IMC</a>
    </div>
</body>
</html>