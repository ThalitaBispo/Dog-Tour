<?php

 session_start();


$nome = $_POST['nome'];
$raca = $_POST['raca'];
$ano = $_POST['ano'];
$mes = $_POST['mes'];
$porte = $_POST['porte'];
$castrado = $_POST['castrado'];
$genero = $_POST['genero'];
$comportamento = $_POST['comportamento'];

$codigo = $_GET['codigo'];

include_once('../funcional/conexao.php');
include_once('../funcional/consulta_dog.php');

while($row = $stmt->fetch()) { 

	$cliente = $row['cd_cliente'];

	try 
	{
		   
		$stmt = $conexao->prepare("UPDATE tb_animal SET nm_animal = :nome,
		                                                nm_raca = :raca,
		                                                aa_nascimento = :ano,
		                                                mm_nascimento = :mes,
		                                                nm_porte = :porte,
		                                                ic_castrado = :castrado,
		                                                nm_genero = :genero,
		                                                ds_comportamento = :comportamento,
		                                                cd_cliente = :cliente 
								WHERE cd_animal = '$codigo' ");
		
		$stmt->execute(array(':nome' => $nome,
							 ':raca' => $raca,
							 ':ano' => $ano,
							 ':mes' => $mes,
							 ':porte' => $porte,
							 ':castrado' => $castrado,
							 ':genero' => $genero,
							 ':comportamento' => $comportamento,
							 ':cliente' => $cliente
							));
     
		// echo "<h1>CADASTRO ALTERADO COM SUCESSO uhuhuhuu :):)</h1>";
		header("Location: ../telas/consulta_dog.php");
	} 

	catch(PDOException $e) 
	{
		echo 'Error: ' . $e->getMessage();
	}

}
	
 ?>