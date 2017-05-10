<?php 

$conn = new PDO("mysql:dbname=php7;host=localhost","root","");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 1;

$stmt->execute(array($id));

//$conn->rollBack();

$conn->commit();

echo "Executado";

 ?>