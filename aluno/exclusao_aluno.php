<!DOCTYPE html>
<!-- cadastro.html -->
<html>
	<head>
	  <title>Cadastro de curso - Exclusão</title>
	  <meta charset="utf-8">
	</head>
	<body><?php //exclusao.php
// efetua a exclusão do curso deve informar ID .
  $id = $_GET["id"];
  
  include_once "../inc/conectabd.inc.php";

  $query = "delete from tb_aluno where id_aluno=$id;";
  if ($result = mysqli_query($link, $query)) {
	  echo "Exclusão efetuada com sucesso";
  }
  
  // encerra a conexão
  mysqli_close($link);
  
 ?>  
 <br>
 <a href="consulta_aluno.php">Ver alunos cadastrados</a>
 
 </body>
</html>
