<?php 

$dir1 = "folder_1";
$dir2=  "folder_2";

if(!is_dir($dir1)) mkdir($dir1);
if(!is_dir($dir2)) mkdir($dir2);

$fileName = "README.txt";

if (!file_exists($dir1.DIRECTORY_SEPARATOR.$fileName)) {
	$file = fopen($dir1.DIRECTORY_SEPARATOR.$fileName,"w+");

	fwrite($file, date("Y-m-d H:i:s"));

	fclose($file);
}

rename(
	$dir1.DIRECTORY_SEPARATOR.$fileName,
	$dir2.DIRECTORY_SEPARATOR.$fileName
);

echo "Arquivo movido";

 ?>