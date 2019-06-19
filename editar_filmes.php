<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Editar Filme</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body class="container text-center shadow p-3 mb-5 bg-white rounded">

	<?php include 'menu.php'; 

	$form = false; 
	if(empty($_GET['id_filme']))
	{
		echo '<h3 class="alert alert-warning">
		Não foi possível concluir essa etapa, por favor, tente novamente ou contate nosso suporte</h3>';
	}
	else
	{

		include 'conn.php';

		$id_filme = $_GET['id_filme'];

		$sql = "SELECT titulo, ano, genero, diretor, estudio FROM tb_filmes WHERE id_filme = $id_filme";

		$result = mysqli_query($conn, $sql);

		if(mysqli_affected_rows($conn) > 0)
		{
			$filme = mysqli_fetch_assoc($result);
			
			$form = true;

		}
	}

	if ($form == true) {
	?>

	 <form action="editado_filmes.php" method="post">
		
		<h2>Editar Filme:</h2>
		

		<p>
			<div class="form-group">
			<label>Título:</label><br>
			<input type="text" name="titulo" class=" form-control border border-info rounded-pill" id="exampleInputName1" aria-describedby="nameHelp" placeholder="Escreva o título do filme:" value="<?php echo $filme['titulo'] ?>">
			
		</p>

		<p>
			<div class="form-group">
			<label>Ano:</label><br>
			<input type="number" name="ano" min="1" class=" form-control border border-info rounded-pill" id="exampleInputYear1" aria-describedby="yearHelp" placeholder="Ano de lançamento:" value="<?php echo $filme['ano'] ?>">
			<div>
			
		</p>

		<p>
			<div class="form-group">
			<label>Gênero:</label><br>
			<input type="text" name="genero"   class="form-control border border-info rounded-pill" id="exampleInputGenre1" aria-describedby="genreHelp" placeholder="Gênero:" value="<?php echo $filme['genero'] ?>">
			<div>
		</p>

		<p>
			<div class="form-group">
			<label>Diretor:</label><br>
			<input type="text" name="diretor"   class="form-control border border-info rounded-pill" id="exampleInputDirector1" aria-describedby="directorHelp" placeholder="Nome do diretor:" value="<?php echo $filme['diretor'] ?>">
			<div>
		</p>

		<p>
			<div class="form-group">
			<label>Estúdio:</label><br>
			<input type="text" name="estudio"   class="form-control border border-info rounded-pill" id="exampleInputStudio1" aria-describedby="studioHelp" placeholder="Estúdio onde foi produzido:" value="<?php echo $filme['estudio'] ?>">
			<div>
		</p>

		<input type="hidden" name="id_filme" 
		value="<?php echo $id_filme ?>">

		<button type="submit" class="btn btn-success">Salvar</button>

	</form>

	<?php } ?>

</body>
</html>