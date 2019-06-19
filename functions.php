<?php  
function verificarMsg()
{
	if(empty($_GET['msg']))
	{
		return '';
	}
	else
	{
		$msg = $_GET['msg'];

		if($msg == 'emptyFields')
		{
			$retorno = '<h3 class="alert alert-warning">
			Por gentileza, preencha todos os campos do formulário
			</h3>';
		}
		else if($msg == 'edtSuccess')
		{
			$retorno = '<h3 class="alert alert-success">
			Filme editado com sucesso!
			</h3>';
		}
		else if($msg == 'edtError')
		{
			$retorno = '<h3 class="alert alert-danger">
			ATENÇÃO: Não foi possível editar filme.<br>Tente novamente ou entre em contato com nosso suporte.
			</h3>';
		}
		else if($msg == 'noId')
		{
			$retorno = '<h3 class="alert alert-warning">
			ATENÇÃO: Não foi possível encontrar o filme para efetuar a exclusão.
			</h3>';
		}
		else if($msg == 'delSuccess')
		{
			$retorno = '<h3 class="alert alert-success">
			Filme excluído com sucesso!
			</h3>';
		}
		else if($msg == 'delError')
		{
			$retorno = '<h3 class="alert alert-danger">
			 Ops, algo deu errado!Não foi possível excluir o filme
			</h3>';
		}
		else
		{
			$retorno = '';
		}

		return $retorno;
	}
}




?>