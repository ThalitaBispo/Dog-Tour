
 <link rel="stylesheet" type="text/css" href="js/cpf.js">

<?php  
	
	include_once('../funcional/conexao.php');

	$user = $_SESSION['user'];

	try 
	{
		   
		$stmt = $conexao->prepare("select tb_animal.*, nm_cliente, nm_endereco, cd_numero, cd_cep, nm_bairro, nm_cidade, sg_uf, ds_complemento, tb_cliente.cd_cliente from tb_cliente join tb_animal on tb_animal.cd_cliente = tb_cliente.cd_cliente join tb_logradouro on tb_logradouro.cd_cliente = tb_cliente.cd_cliente where nm_cliente = '$user' ");
		$stmt->execute();
	  
?>

<?php
	
	} 
	catch(PDOException $e) 
	{
		echo 'ERROR: ' . $e->getMessage();
	}
	
 ?>