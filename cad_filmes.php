<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cad_filmes</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body class="container text-center shadow p-3 mb-5 bg-white rounded">
	

<?php
 include 'menu.php';

if (empty($_POST['titulo']) || empty($_POST['ano']) || empty($_POST['genero']) || empty($_POST['diretor']) || empty($_POST['estudio'])) 
{
	echo "<h2 class='alert alert-danger'>Ocorreu um erro,preencha corretamente todos os campos do cadastro.Se o erro persistir, entre em contato com nosso suporte</h2>";
}
else
{
	$titulo = $_POST['titulo'];
	$ano = $_POST['ano'];
	$genero = $_POST['genero'];
	$diretor = $_POST['diretor'];
	$estudio = $_POST['estudio'];

	include 'conn.php'; 

	$sql = "INSERT INTO tb_filmes (titulo,ano,genero,diretor,estudio) VALUES('$titulo',$ano,'$genero','$diretor','$estudio')";

		
	$result = mysqli_query($conn, $sql);
		
	$linhas = mysqli_affected_rows($conn);
	
	if ($linhas>0) 
	{
		echo "<h3 class='alert alert-success'>Filme cadastrado com sucesso!</h3>";
	}
	else
	{
		echo "<h3>Erro ao cadastrar filme, tente novamente</h3>";
	}

}
	






?>
</body>
</html>