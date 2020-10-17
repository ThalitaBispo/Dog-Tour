
<?php  
	
	include_once('../funcional/conexao.php');

	$user = $_SESSION["usuario_passeador"];
	// $_GET['user'];

	try 
	{
		   
		$stmt = $conexao->prepare("select tb_agendamento.*, nm_cliente, nm_animal from tb_agendamento join tb_cliente on tb_agendamento.cd_cliente = tb_cliente.cd_cliente join tb_animal on tb_animal.cd_cliente = tb_cliente.cd_cliente
		join tb_passeador on tb_agendamento.cd_passeador = tb_passeador.cd_passeador join tb_login on tb_login.cd_passeador = tb_passeador.cd_passeador  where nm_usuario = '$user' group by nm_cliente ");
		// group by nm_cliente = fazer sumir valor duplicado 
		$stmt->execute();
	  
?>

<?php
	
	} 
	catch(PDOException $e) 
	{
		echo 'ERROR: ' . $e->getMessage();
	}
	
 ?>