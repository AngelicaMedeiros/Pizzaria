<nav class="navbar navbar-default">
  <div class="container-fluid">
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php" >Pizzaria Delivery</a>
    </div>
    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        
        
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Pedidos</a></li>
		  <?php
		  	if(empty($_SESSION['id'])){
				
			
		 ?>
        <li> <a href="formLogin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		  
		 
		  <?php }else {
				
					if($_SESSION['adm']==0){
				$consulta_user = $conexao->query("SELECT nome FROM usuario WHERE id_user='$_SESSION[id]'");
				$exibe_user=$consulta_user->fetch(PDO::FETCH_ASSOC);
			
		  
		  ?>
		  <li> <a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $exibe_user['nome'];?></a></li>
		  <li> <a href="sair.php"><span class="glyphicon glyphicon-off"></span> Sair</a></li>
		  <?php } else{ ?>
		  
		  <li> <a href="adm.php"><button class="btn btn-sm btn-danger">ADM</button></a></li>
		  <li> <a href="sair.php"><span class="glyphicon glyphicon-off"></span> Sair</a></li>
			
						
					
		  <?php }
			}?>
          </ul>
        </li>
      </ul>
    </div>
  </div>


