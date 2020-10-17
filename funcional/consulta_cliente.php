
 <link rel="stylesheet" type="text/css" href="js/cpf.js">


<?php  
	
	include_once('../funcional/conexao.php');

    $user = $_SESSION['email'];

	try 
	{
		   
		$stmt = $conexao->prepare("select tb_cliente.*, tb_logradouro.*, nm_usuario from tb_cliente join tb_logradouro on tb_logradouro.cd_cliente = tb_cliente.cd_cliente join tb_login on tb_login.cd_cliente = tb_cliente.cd_cliente where nm_usuario = '$user'; ");
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