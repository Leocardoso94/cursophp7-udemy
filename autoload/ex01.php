<?php 

function __autoload($nomeClasse){
	var_dump($nomeClasse);
	require "$nomeClasse.php";
}

$carro = new DelRey();

$carro->acelerear(80);
 ?>