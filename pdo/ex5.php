<?php 

$conn = new PDO("mysql:dbname=php7;host=localhost","root","");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 2;

$stmt->bindParam(":ID",$id);

$stmt->execute();

echo "Executado";

 ?>