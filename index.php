<?php

//Utiliza a funcao da classe config.php
require_once("config.php");

//variavel para encontrar a classe Sql
//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//encapsulamento, dentro do json encode vc encontra todas informaçoes passadas anteriormentes em $usuarios
//echo json_encode($usuarios);



//Carrega um usuario
//$root = new Usuario();
//$root->loadbyId(1);
//echo $root;



//$lista = Usuario::getList();
//echo json_encode($lista);


//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("d");
//echo json_encode($search);


//Carrega usuario usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("root","123");
//echo $usuario;

//Insert de um usuario novo
$aluno = new Usuario("aluno", "123456");
$aluno->insert();
echo $aluno;

?>