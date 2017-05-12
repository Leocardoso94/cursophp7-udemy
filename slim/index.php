<?php 

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->get('/',function(){
	echo json_encode($arrayName = array('date' => "10/20", ));
});

$app->get('/hello/:name', function ($name) {
	echo "Hello, " . $name;
});

$app->run();

?>