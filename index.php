<!DOCTYPE html>

<html lang="pt-br">
	
<head>
    <meta charset="utf-8">
    <title>Loja do Wesley</title>
	<link rel="icon" type="imagex/png" href="/images/games.ico">
	
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<!-- Link arquivo CSS -->
	<link rel="stylesheet" type="text/css" href="style.css" media="screen"/>
</head>

<body>
	
	<?php
	
		session_start();
	
		include 'conexao.php';
		include 'nav.php';
		include 'banner.html';
		
		$consulta = $conexao->query('SELECT * FROM produtos');
	?>
	
	<div class="container-fluid">
		
		<div class="row">

			<?php
				while($exibir = $consulta->fetch(PDO::FETCH_ASSOC)){	
			?>	
			
			<div class="col-sm-2 text-center" style="margin-top: 40px;">		
					
				<a href="detalhes.php?id=<?php echo $exibir['id'];?>">
					<img src="images/<?php echo $exibir['foto1']; ?>" class="img-responsive" style="width: 80%">
				</a>
				<div>
					<h3><?php echo mb_strimwidth($exibir['nome'],0,30,'...');?></h3>
				</div>
				<div>
					<h4>R$ <?php echo number_format($exibir['preco'],2,',','.');?></h4>
				</div>
				
				<div>
					<a href="detalhes.php?id=<?php echo $exibir['id'];?>">  
						<button class="btn-lg btn-block btn-default">
							<span class="glyphicon glyphicon-info-sign" > Detalhes</span>
						</button>
					</a>
				</div>
			
				
				<div class="text-center" style="margin-top: 5px">
					<?php if($exibir['estoque']>0){ ?>
						<a href="carrinho.php?id=<?php echo $exibir['id']; ?>">
							<button class="btn-lg btn-block btn-info" style="background-color: springgreen">
								<span class="glyphicon glyphicon-usd"> Comprar</span>
							</button>
						</a>	
					
					<?php } else { ?>
						<button class="btn-lg btn-block btn-default" style="background-color: indianred" disabled>
							<span class="glyphicon glyphicon-ban-circle"> Esgotado</span>
						</button>
					<?php } ?>
					
				</div>
			</div>
			
			<?php
				}
			?>
			
		</div>
	</div>
	
	<?php
		include 'footer.html';
	?>
	
</body>
</html>