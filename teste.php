<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
	<?php
	include 'conexao.php';
	$consulta = $conexao->query('SELECT * FROM tamanho');
	while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)){
	echo $exibe['nome'].'<br>';
	echo $exibe['preco'].'<br>';
	echo $exibe['foto'].'<br>';
	
	}
	?>
</body>
</html>