<?php 

//Arquivo de conexao com o banco de dados.
$svName = "ns158.hostgator.com.br";
$userName = "image862_pjVeter";
$passwd = "784512";
$db = "image862_pjVeterinaria";

//Create a new connection to the mysql database
$conn = new mysqli($svName, $userName, $passwd);

//check connection
if ($conn->connect_error) {
	die("Erro na conexao: " . $conn->connect_error);
} else {
	echo "Conexao com sucesso!";
}

?>