<?php

include 'conexao.php';
include 'resize-class.php';

$recebe_produto = $_POST['nome'];
$recebe_marca = $_POST['marca'];
$recebe_departamento = $_POST['departamento'];
$recebe_secao = $_POST['secao'];
$recebe_descricao = $_POST['descricao'];
$recebe_quantidade = $_POST['estoque'];
$recebe_preco = $_POST['preco'];

$remover1='.';
$recebe_preco = str_replace($remover1, '', $recebe_preco);
$remover2=',';
$recebe_preco = str_replace($remover2, '.', $recebe_preco);

$recebe_foto1 = $_FILES['foto1'];
$recebe_foto2 = $_FILES['foto2'];
$recebe_foto3 = $_FILES['foto3'];


$destino = "images/";


preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto1['name'],$extencao1);
$img_nome1 = md5(uniqid(time())).".".$extencao1[1];

preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto2['name'],$extencao2);
$img_nome2 = md5(uniqid(time())).".".$extencao2[1];

preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto3['name'],$extencao3);
$img_nome3 = md5(uniqid(time())).".".$extencao3[1];


try {
	
	$inserir=$conexao->query("INSERT INTO produtos (nome, marca, descricao, departamento, secao, estoque, preco, foto1, foto2, foto3) VALUES ('$recebe_produto', '$recebe_marca', '$recebe_descricao', '$recebe_departamento', '$recebe_secao', '$recebe_quantidade', '$recebe_preco', '$img_nome1', '$img_nome2', '$img_nome3')");
	
	
	move_uploaded_file($recebe_foto1['tmp_name'], $destino.$img_nome1);             
	$resizeObj = new resize($destino.$img_nome1);
	$resizeObj -> resizeImage(1200, 1500, 'auto');
	$resizeObj -> saveImage($destino.$img_nome1, 100);
	
	move_uploaded_file($recebe_foto2['tmp_name'], $destino.$img_nome2);             
	$resizeObj = new resize($destino.$img_nome2);
	$resizeObj -> resizeImage(900, 640, 'auto');
	$resizeObj -> saveImage($destino.$img_nome2, 100);
	
	move_uploaded_file($recebe_foto3['tmp_name'], $destino.$img_nome3);             
	$resizeObj = new resize($destino.$img_nome3);
	$resizeObj -> resizeImage(900, 640, 'auto');
	$resizeObj -> saveImage($destino.$img_nome3, 100);
	
	header('location:prodOK.php');
	
	
}catch(PDOException $e) {
	
	
	echo $e->getMessage();
	
}


?>