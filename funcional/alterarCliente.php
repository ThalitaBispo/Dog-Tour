<?php

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$cep = $_POST['cep'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$contato = $_POST['contato'];

$codigo = $_GET['codigo'];

include_once('../funcional/conexao.php');

	try 
	{
		   
		$stmt = $conexao->prepare("UPDATE tb_cliente 
			join tb_logradouro on tb_logradouro.cd_cliente = tb_cliente.cd_cliente
			join tb_login on tb_login.cd_cliente = tb_cliente.cd_cliente 
			set nm_cliente = :nome, 
			cd_cpf = :cpf, 
			nm_usuario = :email, 
			nm_endereco = :rua,
			ds_complemento = :complemento, 
			cd_numero = :numero,
			cd_cep = :cep,
			nm_bairro = :bairro,
			nm_cidade = :cidade,
			sg_uf = :uf,
			cd_telefone_contato = :contato
			where tb_cliente.cd_cliente = '$codigo';");
		
		$stmt->execute(array(':nome' => $nome,
							 ':cpf' => $cpf,
							 ':email' => $email,
							 ':rua' => $rua,
							 ':complemento' => $complemento,
							 ':numero' => $numero,
							 ':cep' => $cep,
							 ':bairro' => $bairro,
							 ':cidade' => $cidade,
							 ':uf' => $uf,
							 ':contato' => $contato
							));
     
		// echo "<h1>CADASTRO ALTERADO COM SUCESSO uhuhuhuu :):)</h1>";
		header("Location: ../telas/consulta_cliente.php");
	} 
	catch(PDOException $e) 
	{
		echo 'Error: ' . $e->getMessage();
	}
	
 ?>