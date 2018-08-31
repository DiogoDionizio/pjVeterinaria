<?php 

	//abrindo o arquivo de banco de dados.
	require_once('config/bd.php');

	$banco = new db();

	//cadastro dos dados do form.
	//verifica se o post nao está em branco
	//if (!empty($_POST)) {
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$nome = $_POST['nome'];
		$dataNascimento = $_POST['dataNascimento'];
		$endereco = $_POST['endereco'];
		$telefone = $_POST['telefone'];

		//Codigo SQL
		$sql = "INSERT INTO tbUsuario VALUES ('teste')";

		//Query
		if ($result = mysqli_query($banco->conexao(), $sql)) {
			echo "Cadastrado com sucesso!";
		}
	//}

?>