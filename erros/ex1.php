<?php 

function error_hanfler($code, $message, $file,$line){
	echo json_encode(array(
		"message"=>$message,
		"line"=>$line,
		"file"=>$file,
		"code"=>$code,
		));
}

set_error_handler("error_hanfler");

echo 100/0;
?>