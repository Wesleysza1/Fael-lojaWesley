<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Wesley Games - Logon</title>
	
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
	
	include 'conexao.php';	
	include 'nav.php';
	
	?>
	
				<script type='text/javascript'>
					alert('Senha enviada para o email cadastrado.')
				</script>
				
				<script type='text/javascript'>
					location.href='formLogon.php'
				</script>
	
	<!--
	<div class="container-fluid">
	
		<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4 text-center">
				
				<h2>Senha enviada para o email cadastrado!</h2>
				<h4>Por favor, faça o logon clicando abaixo:</h4>
				
				<a href="formLogon.php" class="btn btn-block btn-info" role="button">Entrar na loja</a>
				
				
							
			</div>
		</div>
	</div>
	-->
	<?php include 'footer.html' ?>
	
	
	
	
</body>
</html>