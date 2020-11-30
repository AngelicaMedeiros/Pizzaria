<?php

include 'conexao.php';

$recebe_sabor = $_POST['sabor'];
$recebe_id_tam = $_POST['id_tamanho'];
$recebe_descricao = $_POST['descricao'];
$recebe_preco = $_POST['preco'];

$remover1='.';
$recebe_preco = str_replace($remover1, '', $recebe_preco);
$remover2=',';
$recebe_preco = str_replace($remover2, '.', $recebe_preco);

//$recebe_foto1 = $_FILES['foto1'];
//$recebe_foto2 = $_FILES['foto2'];
//$recebe_foto3 = $_FILES['foto3'];


//$destino = "upload/";


//preg_match("/\.(jpg|jpeg|png){1}$/i",$recebe_foto1['name'],$extencao1);
//$img_nome1 = md5(uniqid(time())).".".$extencao1[1];

//preg_match("/\.(jpg|jpeg|png){1}$/i",$recebe_foto2['name'],$extencao2);
//$img_nome2 = md5(uniqid(time())).".".$extencao2[1];

//preg_match("/\.(jpg|jpeg|png){1}$/i",$recebe_foto2['name'],$extencao3);
//$img_nome3 = md5(uniqid(time())).".".$extencao3[1];


try {
	
	$inserir=$conexao->query("INSERT INTO pizza (sabor, id_tamanho, descricao, preco ) VALUES ('$recebe_sabor', '$recebe_id_tamanho', '$recebe_descricao', '$recebe_preco')");
	
	
	
	
}catch(PDOException $e) {
	
	
	echo $e->getMessage();
	
}


?>