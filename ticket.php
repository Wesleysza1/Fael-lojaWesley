<!doctype html>

<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Wesley Games - Visalizar Pedido</title>
	
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
	
	if (empty($_SESSION['id_user'])) {
		
		header('location:formLogon.php');
		
	}
	
	include 'conexao.php';	
	include 'nav.php';
	
	
	$ticket_compra=$_GET['ticket'];
	
	$consultaVenda = $conexao->query("SELECT * FROM vendas WHERE pedido='$ticket_compra'");
	
	
	?>
	
<div class="container-fluid">
	
	
	<div class="row" style="margin-top: 15px;">
		
		<h1 class="text-center">Pedido Código: <?php echo $ticket_compra ?></h1>
		
	</div>
	
	
	<div class="row" style="margin-top: 15px;">
		
		<div class="col-sm-1 col-sm-offset-1"><h4>Data</h4> </div>
		<div class="col-sm-2"><h4>Ticket </h4></div>
		<div class="col-sm-5"><h4> Produto </h4></div>
		<div class="col-sm-1"><h4> Quantidade </h4></div>
		<div class="col-sm-2"><h4> Preço </h4></div>
		
				
	</div>
	
	
	<?php
	
	$total=0;
			
	while ($exibeVenda=$consultaVenda->fetch(PDO::FETCH_ASSOC)) {
		
		
		$total += $exibeVenda['valor'] * $exibeVenda['quantidade'];
	
	?>
	
	<div class="row" style="margin-top: 15px;">
		
		<div class="col-sm-1 col-sm-offset-1"><?php echo date('d/m/Y',strtotime($exibeVenda['data'])); ?> </div>
		<div class="col-sm-2"> <?php echo $exibeVenda['pedido']; ?> </div>
		
		<?php $consultaProd = $conexao->query("SELECT nome FROM produtos WHERE id='$exibeVenda[id_produto]'");
		$exibeProd=$consultaProd->fetch(PDO::FETCH_ASSOC);
		?>
		
		<div class="col-sm-5"> <?php echo $exibeProd['nome']; ?> </div>
		<div class="col-sm-1 text-center"> <?php echo $exibeVenda['quantidade']; ?> </div>
		<div class="col-sm-2"> R$ <?php echo number_format($exibeVenda['valor'],2,',','.');?></div>
				
	</div>
	

	
	<?php } ?>
	
	<div class="row" style="margin-top: 15px;">
		<h2 class="text-center">Total desta compra: R$ <?php echo number_format($total,2,',','.');?></h2>
	</div>
	
</div>
	
	<?php
	
	include 'footer.html';
	
	?>
	
</body>
</html>