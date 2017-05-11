<?php 

$filename = "9869404.png";

$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($filename);

$base64Encode =  "data:".$mimetype.";base64,".$base64;

 ?>

 <a href="<?=$base64Encode?>" target="_blank">Link para a Imagem</a>

 <img src="<?=$base64Encode?>">