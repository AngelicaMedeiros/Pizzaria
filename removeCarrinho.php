<?php

session_start();
$id_prod=$_GET['id'];

unset($_SESSION['carrinho'][$id_tam]);

header('location:mostraCarrinho.php');
?>