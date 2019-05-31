<?php

require_once("config.php" );
require_once("Sql.php" );
require_once("Usuario.php");

//Carrega um usuário
///$root = new Usuario();
//$root->loadbyId(1);
//echo $root;

///Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("asd");
//echo json_encode($search);

//carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario ->login("LOCALHOST", "!@#$"); 
//echo $usuario;

/*
//Criando um novo usuário
$aluno = new Usuario("aluno", "@lun0");
$aluno->insert();
echo $aluno;
*/
/*
//alterar um usuario
$usuario = new Usuario();

$usuario->loadById(26);

$usuario->update("professor", "!@#$%");
echo $usuario;
*/

$usuario = new Usuario();

$usuario->loadById(7);

$usuario->delete();

echo $usuario;

?>