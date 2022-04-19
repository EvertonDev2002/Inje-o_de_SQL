<?php
include_once("./config/connect.php");
$user = $_POST['user'];
$cpf = $_POST['cpf'];
$pass = $_POST['pass'];

 $query = "INSERT INTO TB_CPF(cpf) VALUES('$cpf')";
 $conn = mysqli_query($connect, $query);
 $Resultcpf = "SELECT id FROM TB_CPF)";
 
 $queryC = "INSERT INTO TB_User(user, pass, FKCPF) VALUES('$user','$pass','$Resultcpf')";
 $conn = mysqli_query($connect, $queryC);

?>