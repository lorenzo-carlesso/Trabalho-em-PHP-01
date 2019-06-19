<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Gerenciar Filmes</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body  class="container shadow p-3 mb-5 bg-white rounded">
	<?php include 'menu.php'; 
		  include 'functions.php';
		  echo verificarMsg(); ?>
	<div class="alert alert-info" role="alert">
	<?php

	include 'conn.php';

		$sql = "SELECT * FROM tb_filmes"; 

		$result = mysqli_query($conn, $sql); 
		$linhas = mysqli_affected_rows($conn); 

	if ($linhas > 0) 
	{
		echo "<p><h3 class='text-center text text-info'> Área de Gerenciamento dos Filmes Cadastrados </h3></p>";
		$registros = array();

		while ($registros = mysqli_fetch_assoc($result)) 
		{
			echo "<p>";

			foreach ($registros as $indice => $valor) 
			
			{
				if ($indice == 'id_filme') 
				{
					$id_filme=$valor;
				}
				echo "<strong>$indice:</strong>" . $valor . "<br>";
			}

			echo '<a href="deletar.php?id_filme='.$id_filme.'
			"onclick="return confirm(\'Deseja excluir esse cadastro?\')"
			class="btn btn-danger btn-sm">
			DELETAR</a>';

			echo ' <a href="editar_filmes.php?id_filme='.$id_filme.'"   
			class="btn btn-warning btn-sm">
			EDITAR</a>';


			echo "</p>";
		}
	}

	else
	{
		echo "<h3>Não há filmes cadastrados...</h3>";
	}




	?>

</body>
</html>