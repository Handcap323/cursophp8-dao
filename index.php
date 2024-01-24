<?php 

require_once("config.php");
//Carrega um usuário
//$root = new Usuario();
//$root->loadById("3");
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("oo");
//echo json_encode($search);

//Carrega um usuario usando o login e a senha
$usuario = new Usuario();
$usuario->login("boot", "abcdefg");
echo $usuario;
 ?>