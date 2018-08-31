<?php

/**
 * Classe responsavel pelo banco de dados
 * Conexao com o banco de dados
 */
 class db
 {
 	
 	public function conexao(){ 

		//Dados do banco
		$conexao = mysqli_connect('ns158.hostgator.com.br', 'image862_pjVeter', '784512', 'image862_pjVeterinaria');

		//verifica a conexao
		if (!$conexao) {
			echo "Error:" . mysqli_connect_error();
		}
	}
}
?>