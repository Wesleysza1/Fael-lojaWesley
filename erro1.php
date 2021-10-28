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
	
	
	<div class="container-fluid">
	
		<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4 text-center">
				
				<script type='text/javascript'>
					alert('Email já cadastrado! A página será redirecionada.')
				</script>
				
				<script type='text/javascript'>
					location.href='formLogon.php'
				</script>
				
				<!--
				<h3>Escolha uma opção abaixo:</h3>
				
				<a href="formUsuario.php" class="btn btn-block btn-info" role="button">Tentar Novamente</a>
				
				<a href="esqueciSenha.php" class="btn btn-block btn-primary" role="button">Esqueci a senha</a>
				-->
							
			</div>
		</div>
	</div>
	
	<?php include 'footer.html' ?>
	
	
	
	
</body>
</html>