<?php 

$name = "images";

if (!is_dir($name)) {
	mkdir($name);
	echo "Diretório $name criado com succeso";
}
else{
	rmdir($name);
	echo "Já existe o diretório: $name, o diretório foi removido";
}

 ?>