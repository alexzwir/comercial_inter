<?php 
	
	//Define os caracteres especiais
	setlocale(LC_ALL, 'pt_BR');

	$server="localhost";
	$user = "root";
	$password = "root";

	//conexao com o servidor
	$connect = mysql_connect($server, $user, $password);
 
	// Caso a conexão seja reprovada, exibe na tela uma mensagem de erro
	if (!$connect) die ("<h1>Falha na conexao com o Banco de Dados!</h1>
		<br>".mysql_error());
 
	// Caso a conexão seja aprovada, então conecta o Banco de Dados.	
	$db = mysql_select_db("comercial_inter");
	$charset = mysql_set_charset('utf8');
	if($db){
		echo "<h1>Conexao estabelecida!</h1>";
	}
	else{
		echo "erro".mysql_error();
	}


?>