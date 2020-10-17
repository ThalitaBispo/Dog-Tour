
<?php  
	
	include_once('../funcional/conexao.php');

	$user = $_SESSION["usuario_passeador"];

	try 
	{
 
		$stmt = $conexao->prepare(" select count(distinct tb_agendamento.cd_cliente) as totalClientes from tb_agendamento join tb_passeador on tb_agendamento.cd_passeador = tb_passeador.cd_passeador join tb_login on tb_login.cd_passeador = tb_passeador.cd_passeador WHERE nm_usuario = '$user' ");
		$stmt->execute();
		
?>

<?php
		// }
	} 
	catch(PDOException $e) 
	{
		echo 'ERROR: ' . $e->getMessage();
	}

 ?>