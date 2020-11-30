<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Pizzaria</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<style>
		.navbar{
			margim-botom:0;
		}
		)
	</style>
			
			
	</script>
</head>
	

<body>
	<?php
	session_start();
	include 'conexao.php';
	include 'nav.php';
	include 'cabecalho.php';
	
	$consulta = $conexao->query('SELECT * FROM tamanho');
	?>
	
<div class="container-fluid">
	<div class="row">
		<?php
			while ($exibir=$consulta->fetch(PDO::FETCH_ASSOC)){
				
				
		?>
<div class="col-sm-3">
	<img src="upload/foto.jpg" class="img-responsive" style="width:70%">
	<div><h1><?php echo $exibir['tam'];?></h1></div>
	<div><h4><?php echo $exibir ['preco'];?></h4></div>
	
	<div class="text-center">
		<a href="carrinho.php?id=<?php echo $exibir['id'];?>">
		<button class="btn btn-lg btn-block btn-success">
			<span class="top-ing">Monte sua Pizza</span>
		
		</button>
		</a>
	</div>
</div>


	
	<?php
	}
		?>
</div>	
	
</div>
	

	
<?php
include "footer.php";
?>
    </body>
</html>
