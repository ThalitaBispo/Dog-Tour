<?

      if (!empty($_POST)) 
			{
				include_once('../funcional/conexao.php');

				$nome = $_POST['nome'];
				$mes = $_POST['mes'];
				$ano = $_POST['ano'];
				$raca = $_POST['raca'];
				$porte = $_POST['porte'];
				$sexo = $_POST['sexo'];
				$comportamento = $_POST['comportamento'];
				$castrado = $_POST['castrado'];
				$cliente = $_GET['cd'];
					
				$stm = $conexao->prepare("INSERT INTO tb_animal (nm_animal, nm_raca, aa_nascimento, mm_nascimento, nm_porte, nm_genero, ds_comportamento, ic_castrado, cd_cliente) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)");
				
				$stm->bindValue(1,$nome);
				$stm->bindValue(2,$raca);
				$stm->bindValue(3,$ano);					   
				$stm->bindValue(4,$mes);
				$stm->bindValue(5,$porte);
				$stm->bindValue(6,$sexo);					   
				$stm->bindValue(7,$comportamento);
				$stm->bindValue(8,$castrado);					   
				$stm->bindValue(9,$cliente);
				
				$stm->execute();

				header("Location: entra.php");

		}
?>