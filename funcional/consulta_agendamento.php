<? 


   if (!empty($_POST)) {

   	include_once('conexao.php'); 

   	$bairro = $_POST['bairro'];
   
		$stmt = $conexao->prepare("select * from tb_passeador where nm_bairro_atende = '$bairro' order by nm_passeador");
		$stmt->execute();

	}
		

	else {

		include_once('conexao.php');
		
		$stmt = $conexao->prepare("select * from tb_passeador order by nm_passeador");
		$stmt->execute();

		}
	
?>