<?php

try{
$conexao = new PDO('mysql:host=localhost;dbname=pizzaria;charset=utf8','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTF8'));
$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
	echo 'ERRO NA CONEXÃO:'.$e->getMessage().'<br>';
	echo 'CÓDIGO DO ERRO:'.$e->getCode();
}


?>