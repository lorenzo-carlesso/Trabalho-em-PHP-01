<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cadastro</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body  class="container text-center shadow p-3 mb-5 bg-white rounded">

	<?php include 'menu.php'; ?>

	<form action="cad_filmes.php" method="post">
		
		<h2>Cadastro do Filme:</h2>

			<p>
				<div class="form-group">
				<label class="form-group">Título</label><br>
				<input type="text" name="titulo" class=" form-control border border-info rounded-pill" id="exampleInputName1" aria-describedby="nameHelp" placeholder="Escreva o título do filme:">
				<div>
			</p>

			<p>
				<div class="form-group">
				<label  class="form-group">Ano</label><br>
				<input type="number" name="ano" min="1" class=" form-control border border-info rounded-pill" id="exampleInputYear1" aria-describedby="yearHelp" placeholder="Ano de lançamento:">
				</div>
			</p>

			<p>
				<div class="form-group">
				<label for="exampleInputEmail1">Gênero</label><br>
				<input type="text" name="genero"  class="form-control border border-info rounded-pill" id="exampleInputGenre1" aria-describedby="genreHelp" placeholder="Gênero:">
				</div>
			</p>
			<p>
				<div class="form-group">
				<label for="exampleInputEmail1">Dirigido por...?</label><br>
				<input type="text" name="diretor"  class="form-control border border-info rounded-pill" id="exampleInputDirector1" aria-describedby="directorHelp" placeholder="Nome do diretor:">
				</div>
			</p>
			<p>
				<div class="form-group">
				<label for="exampleInputEmail1">Estúdio</label><br>
				<input type="text" name="estudio"  class="form-control border border-info rounded-pill" id="exampleInputStudio1" aria-describedby="studioHelp" placeholder="Estúdio onde foi produzido:">
				</div>
			</p>



			<button type="submit" class="btn btn-success rounded-pill">Enviar</button>
			<button type="reset" class="btn btn-danger rounded-pill">Apagar</button>
	</form>

</body>
</html>