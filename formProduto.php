<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pizzaria - Login de usuário</title>
	
<meta name="viewport" content="width=device-width, initial-scale=1">
	
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
<script src="jquery.mask.js"></script>

<script>
	
	
	
$(document).ready(function(){
	
$('#preco').mask('000.000.000.000.000,00', {reverse: true});	
	
});
	
</script>
	
<style>

.navbar{
	margin-bottom: 0;
}
	
	
</style>
	
	
	
	
</head>

<body>
	
<?php
	session_start();
	if(empty($_SESSION['adm']) ||$_SESSION['adm']!=1){
		header('location:index.php');
	}
	
	
	include 'conexao.php';	
	include 'nav.php';
	include 'cabecalho.php';
	
	?>
	
	
	<div class="container-fluid">
	
		<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4">
				
				<h2>Inclusão de produto</h2>
				
				<form method="post" action="incluiProduto.php" name="incluiProd" enctype="multipart/form-data">
				
					<div class="form-group">
				
						<label for="pizza">Pizza</label>
						<input name="text" type="text" class="form-control" required id="produto">
					</div>
				
				<div class="form-group">
					
					
					<label for="sabor">Sabor</label>
					
					<select class="form-control" name="sabor">
					  <option value="Calabresa">Calabresa</option>
					  <option value="Frango">Frango</option>
					  <option value="Bacon">Bacon</option>
					  <option value="4 queijos">4 queijos</option>
					  <option value="Portuguesa">Portuguesa</option>
					   <option value="Coração">Coração</option>
					</select>

			
					</div>
					
					
					
					<div class="form-group">
				
					<label for="tamanho">Tamanho</label>
					
					<select class="form-control" name="tamanho">
					  <option value="Familia">Familia</option>
					  <option value="Grande">Grande</option>
					  <option value="Média">Média</option>
					  <option value="Pequena">Pequena</option>
					</select>

					</div>
					
					
											

				
					
					
					<div class="form-group">
				
					<label for="descricao">Descrição</label>
					
						<textarea rows="5" class="form-control" name="descricao"></textarea>
						

					</div>
					
					
					
									
					
					
					<div class="form-group">
				
					<label for="preco">Preço</label>
					
					<input type="text" class="form-control" required name="preco" id="preco">

					</div>
					
					
					
					
							
				<button type="submit" class="btn btn-lg btn-default">
					
					<span class="glyphicon glyphicon-pencil"> Cadastrar </span>
					
				</button>
				
				</form>
			</div>
			</div>
		</div>
	</div>
	
	<?php include 'footer.php' ?>
	
	
	
	
</body>
</html>