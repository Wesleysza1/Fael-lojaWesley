<!doctype html>

<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Wesley Games</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<!-- importação Lightbox -->
	<link href="lightbox.css" rel="stylesheet">
	<script src="lightbox.js"></script>
	
	
	<style>
	
	.navbar{
		margin-bottom: 0;
	}
	
	
	</style>
	
	
	
</head>

<body>	
	
	<?php
	
	session_start();
	
	include 'conexao.php';	
	include 'nav.php';
	
	if (!empty($_GET['id'])){
		
		$id_prod = $_GET['id'];
		$consulta = $conexao->query("SELECT * FROM produtos WHERE id='$id_prod'");
		$exibir = $consulta->FETCH(PDO::FETCH_ASSOC);
		
	} else {
		header('location:index.php');
	}
	

	
	?>
	
<div class="container-fluid">
	
	
	
	<div class="row">
		
		 <div class="col-sm-4 col-sm-offset-1">
			 
			 <h1>Detalhes do Produto</h1>
			 
			 <a href="images/<?php echo $exibir['foto1']; ?>" data-lightbox="galeria" data-title="<?php echo $exibir['nome']; ?>">
			 	<img src="images/<?php echo $exibir['foto1']; ?>" class="img-responsive" style="width:100%;">
			 </a>
			
			 <?php if($exibir['foto2']!="") { ?>
			 	<div class="col-sm-4 col-sm-offset-1" style="margin-top: 10px;">
					<a href="images/<?php echo $exibir['foto2']; ?>" data-lightbox="galeria" data-title="<?php echo $exibir['nome']; ?>">
						<img src="images/<?php echo $exibir['foto2']; ?>" class="img-responsive">
					</a>
			 	</div>
			 
			 <?php } if($exibir['foto3']!="") { ?>
				<div class="col-sm-4 col-sm-offset-1" style="margin-top: 10px;">
					<a href="images/<?php echo $exibir['foto3']; ?>" data-lightbox="galeria" data-title="<?php echo $exibir['nome']; ?>">
						<img src="images/<?php echo $exibir['foto3']; ?>" class="img-responsive">
					</a>
			 	</div>
			 <?php } ?>
			
		</div>
		
				
 		 <div class="col-sm-7"><h1><?php echo $exibir['nome']; ?></h1>
		
		<p><?php echo nl2br($exibir['descricao']); ?></p>
		
			 <p><strong><?php echo $exibir['marca']; ?></strong></p>
		
		<h3>R$ <?php echo number_format($exibir['preco'],2,',','.'); ?></h3>
			 
			 
		<button class="btn btn-lg btn-success">Comprar</button>
				
		</div>		
	

	
</div>
	
	<?php include 'footer.html'; 	?>
	
</body>
</html>