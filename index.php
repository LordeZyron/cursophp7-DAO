<?php

//Utiliza a funcao da classe config.php
require_once("config.php");

//variavel para encontrar a classe Sql
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//encapsulamento, dentro do json encode vc encontra todas informaçoes passadas anteriormentes em $usuarios
echo json_encode($usuarios);

?>