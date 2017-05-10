<?php 

$fileName = "usuarios.csv";

if (file_exists($fileName)) {
	$file = fopen($fileName,"r");

	$headers = explode(";",fgets($file));

	$data = array();

	while ($row = fgets($file)) {
		$rowData explode(";",fgets($row));
	}


	fclose($file);
}

?>