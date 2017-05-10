<?php 

$conn = new mysqli('localhost','root','','php7');

if($conn->connect_error){
	echo "Erro: ".$con->connect_error;
	exit;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin,dessenha) VALUES (?, ?)");

$stmt->bind_param("ss",$login,$pass);

$login = "user";
$pass="12346";

$stmt->execute();

$login = "root";
$pass="!@#$%";

$stmt->execute();

 ?>