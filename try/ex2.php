<?php 

function trataNome($name){
	if (!$name) {
		throw new Exception("Nenhum nome foi informado", 400);
	}

	echo ucfirst($name)."<br>";
}

try {
	trataNome("João");
	trataNome("");
	
} catch (Exception $e) {
	
	echo $e->getMessage();

} finally{
	echo "<br>Executou o bloco try";
}

?>