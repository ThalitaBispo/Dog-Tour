<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$genero = $_POST['genero'];
$telefone = $_POST['telefone'];
$nascimento = $_POST['nascimento'];
$nascimento = implode("-", array_reverse(explode("/", $nascimento)));
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$profissional = $_POST['profissional'];
$perfil = $_POST['perfil'];
$atendimento = $_POST['atendimento'];
$periodo = $_POST['periodo'];
$porte = $_POST['porte'];
$valor = $_POST['valor'];
$dir = "img/passeadores/"; // diretorio para as imagens
$foto = $_FILES['imgUsuario'];

//upload da foto
					echo $ext = strtolower(substr($foto['name'],-4)); //Pegando extensão do arquivo 
				
					echo $novo_nome = date("Y.m.d-H.i.s").$ext; //Definindo um novo nome para o arquivo 
		
					move_uploaded_file($foto['tmp_name'], $dir.$novo_nome); //Fazer upload do arquivo 
					
					$caminhoIMG = $dir.$novo_nome;

include_once('../funcional/conexao.php');

include_once('../funcional/consulta_passeador.php'); 

while($row = $stmt->fetch()) { 

	echo $row['cd_passeador'];

	$codigo = $row['cd_passeador'];

	try 
	{
		   
		$stmt = $conexao->prepare("UPDATE tb_passeador join tb_contato_passeador join tb_login 
			set nm_passeador = :nome,
			cd_rg = :rg, 
			cd_cpf = :cpf, 
			ds_endereco = :endereco,
			ds_experiencia_profissional = :profissional, 
			dt_nascimento = :nascimento, 
			ds_imagem = :caminhoIMG, 
			nm_genero = :genero,
			ds_perfil = :perfil, 
			ds_periodo = :periodo,
			ds_dia_atendimento = :atendimento, 
			ds_porte_cachorro = :porte, 
			ds_valor_cobrado = :valor,
			cd_telefone_passeador = :telefone 
			where tb_passeador.cd_passeador = '$codigo';");
		
		$stmt->execute(array(':nome' => $nome,
			                 ':rg' => $rg,
							 ':cpf' => $cpf,
							 ':endereco' => $endereco,
							 ':profissional' => $profissional,
							 ':nascimento' => $nascimento,
							 ':caminhoIMG' => $caminhoIMG,
							 ':genero' => $genero,
							 ':perfil' => $perfil,
							 ':periodo' => $periodo,
							 ':atendimento' => $atendimento,
							 ':porte' => $porte,
							 ':valor' => $valor,
							 ':telefone' => $telefone,
							));
     
		// echo "<h1>CADASTRO ALTERADO COM SUCESSO uhuhuhuu :):)</h1>";
		header("Location: ../telas/dashboard.php");
	} 
	catch(PDOException $e) 
	{
		echo 'Error: ' . $e->getMessage();
	}
	
}
 ?>