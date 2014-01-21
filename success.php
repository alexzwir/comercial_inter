<?php require "config.php" ?>

<html>
<head>
	<title>Cadastro realizado com sucesso</title>
</head>
<body>
	<?php 
		if(isset($_POST['nome_empresa']) && isset($_POST['nome_contato']) && isset($_POST['telefone_contato'])) {

			//seta as variaveis
			$nome_empresa = mysql_real_escape_string($_POST['nome_empresa']);
			$nome_contato = mysql_real_escape_string($_POST['nome_contato']);
			$telefone_contato = mysql_real_escape_string($_POST['telefone_contato']);


			$sql = "INSERT INTO empresas (nome_empresa,nome_contato,telefone_contato) 
					VALUES  ('$nome_empresa', '$nome_contato', '$telefone_contato')";
			$query = mysql_query($sql);

			if($query) {
				echo "Cadastro realizado";
				header('Location:cadastra.php');

			}
			else{
				echo mysql_error();
			}


						


		}
	





	?>



</body>
</html>