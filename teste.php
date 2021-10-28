<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
	
	<?php
	
		include 'conexao.php';
	
		$consulta = $conexao->query('SELECT * FROM produtos');
	
		while($exibir = $consulta->fetch(PDO::FETCH_ASSOC)){
			echo $exibir['nome'].'<br>';
			echo $exibir['descricao'].'<br>';
			echo $exibir['preco'].'<br>';
			echo $exibir['foto1'].'<br>';
			echo '-------------------------------'.'<br>';
		}
	
	?>
	
</body>
</html>