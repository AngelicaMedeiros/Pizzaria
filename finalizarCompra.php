<?php

session_start();

include 'conexao.php';



$pedido = uniqid();
$id_user = $_SESSION['id'];


foreach ($_SESSION['carrinho'] as $id => $qnt)  {
    $consulta = $conexao->query("SELECT * FROM tamanho WHERE id='$id'");
    $exibe = $consulta->fetch(PDO::FETCH_ASSOC);
    $preco = $exibe['preco'];
    
	
	$inserir = $conexao->query("INSERT INTO pedidos (pedido, id_comprador, id_tam, quantidade, valor) VALUES
	('$pedido','$id_user','$id','$qnt','$preco')");
	
}

include 'fim.php';


?>