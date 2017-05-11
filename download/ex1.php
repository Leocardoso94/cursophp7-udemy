<?php 

$link = "https://www.google.com.br/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png";

$content = file_get_contents($link);

$parse = parse_url($link);

$baseName = basename($parse["path"]);

$file = fopen($baseName,"w+");

fwrite($file, $content);

fclose($file);

?>

<img src="<?=$baseName?>">