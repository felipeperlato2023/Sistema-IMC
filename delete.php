<?php


include('conn.php');
session_start();
$id ='';
$id =  $_SESSION['idimc'];



$sql = "SELECT * FROM imc WHERE idimc = $id";

$result = $conn->query($sql);

print_r($id);

if($result->num_rows>0)
 {
     $sqldelete = "DELETE FROM imc WHERE idimc = $id ";

     $resultdelete = $conn->query($sqldelete);
     
 }
    header('location: imc.php');
 

?>