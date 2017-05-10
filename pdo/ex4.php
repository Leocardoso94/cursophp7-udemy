<?php 

$conn = new PDO("mysql:dbname=php7;host=localhost","root","");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASS WHERE idusuario = :ID");

$login = "Leonardo";
$pass = "123";
$id = 2;

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASS",$pass);
$stmt->bindParam(":ID",$id);


$stmt->execute();

echo "Executado";

 ?>