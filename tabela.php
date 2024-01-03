<?php

$id = $_SESSION['idcliente'];
$idimc ='';


include('conn.php');
include('calculo.php');


$sql = "SELECT idimc,datacal,peso,altura,imc,categoria,idcliente from imc where idcliente = '$id'";

    $result = $conn->query($sql); //query: essa função é responasavel por enviar a consulta para o bd.
                                  //result: armazena o resultado da consulta;


           if ($result->num_rows > 0) {
               // Supondo que apenas uma linha seja retornada, caso contrário, você precisa ajustar a lógica
               $row = $result->fetch_assoc();
               $idimc = $row['idimc'];
                                }
                                
                 // Salve o valor em uma variável de sessão
               $_SESSION['idimc'] = $idimc;


?>