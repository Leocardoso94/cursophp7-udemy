<?php 
	
	$data = array('empresa' => "Global Hitss", );

	setcookie("NOME_DO_COOKIE",json_encode($data, time() + 3600));

	echo "Ok";
?>