<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Exibir Filmes</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body  class="container shadow p-3 mb-5 bg-white rounded">

	<?php include 'menu.php'; ?>

	<div class="alert alert-info" role="alert">


	<?php
		include 'conn.php';

		$sql = "SELECT * FROM tb_filmes"; 

		$result = mysqli_query($conn, $sql); 
		$linhas = mysqli_affected_rows($conn); 

	if ($linhas > 0)  
	{
		echo "<p><h3 class='text-center text text-info'> Filmes Cadastrados </h3></p>";
		$registros = array();

		while ($registros = mysqli_fetch_assoc($result)) 
		{
			echo "<p>";

			foreach ($registros as $indice => $valor) 
			
			
			{
				echo "<strong>$indice:</strong>" . $valor . "<br>";
			}

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