
<?php  
	
	include_once('../funcional/conexao.php');

	$user = $_SESSION['user'];

	try 
	{
		   
		$stmt = $conexao->prepare("select * from tb_agendamento join tb_cliente on tb_agendamento.cd_cliente = tb_cliente.cd_cliente where nm_cliente = '$user' ");
		$stmt->execute();

?>

<?php
	
	} 
	catch(PDOException $e) 
	{
		echo 'ERROR: ' . $e->getMessage();
	}
	
 ?>