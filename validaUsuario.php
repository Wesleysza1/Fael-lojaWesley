<?php

	session_start();

	include 'conexao.php';
	
	$recebe_email = $_POST['email'];
	$recebe_senha = $_POST['senha'];

	$consulta = $conexao->query("SELECT id_user, email, senha, adm FROM usuarios WHERE email='$recebe_email' AND senha='$recebe_senha'");

	if($consulta->rowCount()==1){
		$exibe_user = $consulta->fetch(PDO::FETCH_ASSOC);
		
		if($exibe_user['adm']==0){
			
			$_SESSION['id_user']=$exibe_user['id_user'];
			$_SESSION['adm']=0;
			
			header('location:index.php');
		}
		else {
			$_SESSION['id_user']=$exibe_user['id_user'];
			$_SESSION['adm']=1;
			
			header('location:index.php');
		}
		
	}
	else {
		header('location:erro.php');
	}
?>