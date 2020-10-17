
<?php  

    session_start();
	
	include_once('../funcional/conexao.php');

	$nome = $_SESSION['nome_passeador'];
	//$codigo = $_GET['codigo'];

	try 
	{
		   
		$stmt = $conexao->prepare("select * from tb_passeador join tb_contato_passeador on tb_contato_passeador.cd_passeador = tb_passeador.cd_passeador join tb_login on tb_login.cd_passeador = tb_passeador.cd_passeador where nm_passeador = '$nome' ");
		$stmt->execute();
	
?>

<?php

	} 
	catch(PDOException $e) 
	{
		echo 'ERROR: ' . $e->getMessage();
	}
	
 ?>