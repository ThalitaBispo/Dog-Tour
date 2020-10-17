<?

      if (!empty($_POST)) 
			{
				include_once('../funcional/conexao.php');

				$cep  = $_POST['cep'];
				$rua   = $_POST['rua'];
				$num   = $_POST['numero'];
				$complemento   = $_POST['complemento'];
				$bairro   = $_POST['bairro'];
				$cidade   = $_POST['cidade'];
				$uf   = $_POST['uf'];
				$cliente = $_GET['cd'];

				// $stmt = $conexao->prepare("INSERT INTO tb_uf (nm_uf) VALUES(?)");
				
				// $stmt->bindValue(1,$uf);					   
				
				// $stmt->execute();

				// if ($stmt->execute()) {


				// $stmt = $conexao->prepare("select * from tb_uf where nm_uf = '$uf' ");

				// $stmt->execute();

				// while($row = $stmt->fetch()) { 

				// $codigo_uf = $row['sg_uf'];
					
				$stm = $conexao->prepare("INSERT INTO tb_logradouro (nm_endereco, ds_complemento, cd_numero, cd_cep, nm_bairro, nm_cidade, sg_uf, cd_cliente) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
				
				$stm->bindValue(1,$rua);					   
				$stm->bindValue(2,$complemento);
				$stm->bindValue(3,$num);					   
				$stm->bindValue(4,$cep);
				$stm->bindValue(5,$bairro);					   
				$stm->bindValue(6,$cidade);
				$stm->bindValue(7,$uf);					   
				$stm->bindValue(8,$cliente);
				
				$stm->execute();

				header("Location: perfil_dog.php?cd=$cliente");

				// }
				
			// }

		}
?>