
<?php  
	
	include_once('../funcional/conexao.php');

	$user = $_SESSION["usuario_passeador"];

	try 
	{
 
		$stmt = $conexao->prepare(" SELECT count(*) as Agendamento FROM tb_agendamento join tb_passeador on tb_agendamento.cd_passeador = tb_passeador.cd_passeador join tb_login on tb_login.cd_passeador = tb_passeador.cd_passeador WHERE nm_usuario = '$user' and dt_agendamento >= CURDATE() ");
		// and hr_agendamento > CURTIME()
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