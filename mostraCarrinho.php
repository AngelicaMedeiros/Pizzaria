<div class="container-fluid">
	
	<div class="row text-center" style="margin-top: 15px;">
		<h1>Carrinho de Compras</h1>
	</div>
	
	
	<?php
	
	$total = null;
    foreach ($_SESSION['carrinho'] as $id => $qnt)  {
    $consulta = $conexao->query("SELECT * FROM tamanho WHERE id='$id'");
    $exibe = $consulta->fetch(PDO::FETCH_ASSOC);
	$tam = $exibe['tam'];
    $preco = $exibe['preco'];
    $total += $exibe['preco'] * $qnt;
	
	?>
	
	
	
	
	
	<div class="row" style="margin-top: 15px;">
		
		
		
		<div class="col-sm-1 col-sm-offset-1">
			<img src="upload/foto.jpg" class="img-responsive">
		</div>
		
		
		<div class="col-sm-4">
			<h4 style="padding-top:20px"><?php echo $tam; ?></h4>
		</div>	
		
		
		<div class="col-sm-2">
			<h4 style="padding-top:20px">R$ <?php echo $preco; ?></h4>
		</div>		
		<div class="col-sm-2" style="padding-top:20px">
			<h4><?php echo $qnt; ?> </h4>
		</div>
		
  
		<div class="col-sm-1 col-xs-offset-right-1" style="padding-top:20px">
		
		<a href="removeCarrinho.php?id=<?php echo $id;?>">	
		<button class="btn btn-lg btn-block btn-danger">
		<span class="glyphicon glyphicon-remove"></span>		
		</button>
			</a>
		</div> 
				
	
	

	
<div class="text-center">		
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Escolha os Sabores da Pizza</label>
  </div>
 


<div class="input-group mb-3">
  <select class="custom-select" id="inputGroupSelect02">
    <option selected>Sabores</option>
    <option value="1">Calabresa</option>
    <option value="2">Frango</option>
    <option value="3">Bancon</option>
	<option value="1">4 queijos</option>
    <option value="2">Portuguesa</option>
    <option value="3">Strogonof</option>
	<option value="1">Filé</option>
    <option value="2">Strogonof Frango</option>
    <option value="3">Coração</option>
	<option value="2">Chocolate com Morango</option>
    <option value="3">Banana com canela</option>
  </select>

<div class="input-group mb-3">
  <select class="custom-select" id="inputGroupSelect02">
    <option selected>Sabores</option>
    <option value="1">Calabresa</option>
    <option value="2">Frango</option>
    <option value="3">Bancon</option>
	<option value="1">4 queijos</option>
    <option value="2">Portuguesa</option>
    <option value="3">Strogonof</option>
	<option value="1">Filé</option>
    <option value="2">Strogonof Frango</option>
    <option value="3">Coração</option>
	<option value="2">Chocolate com Morango</option>
    <option value="3">Banana com canela</option>
  </select>
  </div>
	

</div>
		</div>
		</div>
	</div>
	<?php } ?>