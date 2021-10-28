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
	include 'banner.html';
	
	if(empty($_GET['busca'])){
		header('location:index.php');
	}
	else {
		$recebe_busca = $_GET['busca'];
		$consulta = $conexao->query("SELECT * FROM produtos WHERE nome LIKE CONCAT ('%','$recebe_busca','%') OR descricao LIKE CONCAT ('%','$recebe_busca','%') OR marca LIKE CONCAT ('%','$recebe_busca','%') OR secao LIKE CONCAT ('%','$recebe_busca','%') OR preco LIKE CONCAT ('%','$recebe_busca','%')");

		if($consulta->rowCount()==0){
			echo "<html><script>location.href='erro2.php'</script></html>";
		}
	}
	
	
	?>
	
<div class="container-fluid">	
	
	<?php while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>
	
	<div class="row" style="margin-top: 15px;">
		
		<div class="col-sm-1 col-sm-offset-1">
			<a href="detalhes.php?id=<?php echo $exibe['id'];?>">
				<img src="images/<?php echo $exibe['foto1'] ?>" class="img-responsive">
			</a>
		</div>
		<div class="col-sm-5"><h4 style="padding-top:20px"><?php echo $exibe['nome'] ?></h4></div>
		<div class="col-sm-2"><h4 style="padding-top:20px">R$ <?php echo number_format($exibe['preco'],2,',','.'); ?></h4></div>
		<div class="col-sm-2 col-xs-offset-right-1" style="padding-top:20px">
			<button class="btn btn-lg btn-block btn-default">
				<a href="detalhes.php?id=<?php echo $exibe['id'];?>">
					<span class="glyphicon glyphicon-info-sign" style="color: cadetblue;"> Detalhes</span>
				</a>
			</button>		
		</div> 
				
	</div>	
	<?php } ?>
	

	
</div>
	
	<?php
	
	include 'footer.html';
	
	?>
	
</body>
</html>