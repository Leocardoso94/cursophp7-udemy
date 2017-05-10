<?php 
require_once("config.php");

//$root = new Usuario();

//$root->loadById(3);

//echo $root;


//$lista = Usuario::getList();

//echo json_encode($lista);

//$search = Usuario::search("jo");

//echo json_encode($search);

//$jose = new Usuario();

//$jose->login("jose","123");

//echo $jose;


//$construtor  = new Usuario("Construtor","@12@");

//$construtor->insert();

//echo $construtor;

//$user = new Usuario();

//$user->loadById(7);

//$user->update("professor","123456");

//echo $user;


$user = new Usuario();

$user->loadById(6);

$user->delete();

echo $user;
 ?>