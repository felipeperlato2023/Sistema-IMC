
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <title>Meus IMC</title>
</head>
<body>
  <?php
    include('tabela.php');

  ?>

  <h1>Bem-Vindo <?php echo $_SESSION['nome']?></h1>
    </div>
    <div  class="a.sair">
    <a href="principal.php">Voltar</a>

    </div>
    <div class="body tabela">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">DATA E HORA</th>
      <th scope="col">PESO</th>
      <th scope="col">ALTURA</th>
      <th scope="col">IMC</th>
      <th scope="col">CATEGORIA</th>
      <th scope="col">ID CLIENTE</th>
      <th scope="col">AÇÕES</th>

    </tr>
  </thead>
  <tbody>
  

    <?php
 
  while($user_data = mysqli_fetch_assoc($result))
  {
      echo "<tr>";
      echo "<td>" . $user_data['idimc'] . "</td>";
      echo "<td>" . $user_data['datacal'] . "</td>";
      echo "<td>" . $user_data['peso'] . "</td>";
      echo "<td>" . $user_data['altura'] . "</td>";
      echo "<td>" . $user_data['imc'] . "</td>";
      echo "<td>" . $user_data['categoria'] . "</td>";
      echo "<td>" . $user_data['idcliente'] . "</td>";
      echo"<td>

      <a class='btn-sm btn-secundary' href='delete.php?id=$user_data[idimc]'>
      <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
        <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
      </svg>
    </a>
     </td>";

     echo "</tr>";


      

  }


?>
      
  </tbody>
</table>


    </div>
 
</body>
</html>