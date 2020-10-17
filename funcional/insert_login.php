<?php

			if (!empty($_POST)) 
			{
				include_once('../funcional/conexao.php');

				$nome = $_POST['nome'];				
				$email = $_POST['email'];
				$senha = $_POST['senha'];
				$contato = $_POST['telefone_contato'];  
				
				$stmt = $conexao->prepare("INSERT INTO tb_cliente (nm_cliente, cd_telefone_contato) VALUES(?, ?)");
				
				$stmt->bindValue(1,$nome);
				$stmt->bindValue(2,$contato);					   
				
				$stmt->execute();
				
				// echo "<script>
				// 		alert('Cadastrado com Sucesso!');
				// 	  </script>";

				if ($stmt->execute()) {

				$stmt = $conexao->prepare("select * from tb_cliente where nm_cliente = '$nome' ");

				// "select * from tb_cliente join tb_login on tb_login.cd_cliente = tb_cliente.cd_cliente where nm_cliente = '$nome' "

				$stmt->execute();

				while($row = $stmt->fetch()) { 

				$codigo = $row['cd_cliente'];
					
				$stmt = $conexao->prepare("INSERT INTO tb_login (cd_cliente, nm_usuario, ds_senha) VALUES(?, ?,?)");
				
				$stmt->bindValue(1,$codigo);					   
				$stmt->bindValue(2,$email);
				$stmt->bindValue(3,$senha);
				
				$stmt->execute();

				header("Location: logradouro.php?cd=$codigo");

				}

			}

		}

?>

<!-- https://pt.stackoverflow.com/questions/107739/fazer-insert-em-duas-tabelas-ao-mesmo-tempo -->