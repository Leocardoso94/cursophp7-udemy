<?php 

$conn = new PDO("mysql:dbname=php7;host=localhost","root","");

$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin,dessenha) VALUES (:LOGIN, :PASS)");

$login = "jose";
$pass = "123";

$stmt->bindParam(":LOGIN",$login);

$stmt->bindParam(":PASS",$pass);

$stmt->execute();

echo "Executado";

 ?>