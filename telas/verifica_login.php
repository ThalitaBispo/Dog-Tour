<?php

session_start();

include_once('../funcional/conexao.php');

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$stmt = $conexao->prepare("select * from tb_login where nm_usuario = '$usuario' and ds_senha = '$senha' ");
$stmt->execute();

$resultado_id = $stmt->fetchAll();

$dados_usuario = sizeof($resultado_id);

// echo "<pre>";
// print_r($resultado_id);
// echo "</pre>";

// foreach($resultado_id as $item)
// {
//    echo $item["nm_cliente"];
//    echo $item['nm_email'];
// }

// echo $resultado_id['nm_cliente'];
// echo $resultado_id['nm_email'];

if($dados_usuario==1)  // testa se a consulta retornou algum registro
{

	foreach($resultado_id as $item)
	{
		//https://pt.stackoverflow.com/questions/61379/pdo-fetch-fetchall

		if($item['cd_cliente'] == null){ 

			$st = $conexao->prepare("select * from tb_login join tb_passeador on tb_login.cd_passeador = tb_passeador.cd_passeador where nm_usuario = '$usuario' ");
			$st->execute();
			$result = $st->fetchAll();

		foreach($result as $resultado){

		$_SESSION['nome_passeador'] =  $resultado["nm_passeador"];
		$_SESSION['usuario_passeador'] =  $resultado['nm_usuario'];
		$_SESSION['codigo'] =  $resultado["cd_passeador"];

		// direciona para a página inicial dos usuários cadastrados
		header ("Location: dashboard.php"); 
		  }
		
		}

		else{

			$stm = $conexao->prepare("select * from tb_login join tb_cliente on tb_login.cd_cliente = tb_cliente.cd_cliente where nm_usuario = '$usuario' and ds_senha = '$senha' ");
			$stm->execute();
			$resultado = $stm->fetchAll();

			foreach($resultado as $r){

		$_SESSION['user'] =  $r["nm_cliente"];
		$_SESSION['email'] =  $r['nm_usuario'];
		$_SESSION['codigo'] =  $r["cd_cliente"];
		$_SESSION['cpf'] =  $r["cd_cpf"];

			header('Location: index.php');
		  }

		}
	}

	// $_SESSION['user'] = $resultado_id['nm_cliente'];
    // setcookie("usuario", $usuario);
    // setcookie("senha", $senha);
}
else
{
	// echo "<html><body>";
	// echo "<p align=\"center\">O login não foi realizado porque os dados digitados são inválidos.</p>";
	// echo "<p align=\"center\"><a href=\"entra.html\">Voltar</a></p>";
	// echo "</body></html>";

	header("Location: entra.php?erro=1");
	
}

// $conexao = null;

?>