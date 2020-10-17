<?php
			if (!empty($_POST)) 
			{
				include_once('../funcional/conexao.php');
				
				$nome  = $_POST['nome'];
				$cpf = $_POST['cpf'];
				$data   = $_POST['nascimento'];
				$data = implode("-", array_reverse(explode("/", $data)));
				$email   = $_POST['email'];
				$dir = "../telas/img/usuarios/"; // diretorio para as imagens
				$foto = $_FILES['imgUsuario'];
				// $celular  = $_POST['celular']; 
				// $senha   = $_POST['senha'];  
				
				$stmt = $conexao->prepare("INSERT INTO tb_passeador (nm_passeador, cd_cpf, dt_nascimento) VALUES(?, ?, ?)");
									   
				$stmt->bindValue(1,$nome);
				$stmt->bindValue(2,$cpf);
				$stmt->bindValue(3,$data);
				// $stmt->bindValue(3,$celular);
				// $stmt->bindValue(4,$email);
				// $stmt->bindValue(5,$senha);
				
				$stmt->execute();
				
				// echo "<script>
				// 		alert('Cadastrado com Sucesso!');
				// 	  </script>";

			    // header("Location: seja_passeador.php");

			    if ($stmt->execute()) {

				$stmt = $conexao->prepare("select * from tb_passeador where cd_cpf = '$cpf' ");

				$stmt->execute();

				while($row = $stmt->fetch()) { 

					$codigo = $row['cd_passeador'];
					
				$stmt = $conexao->prepare("INSERT INTO tb_login (cd_passeador, nm_usuario) VALUES(?,?)");
				
				$stmt->bindValue(1,$codigo);					   
				$stmt->bindValue(2,$email);
				
				$stmt->execute();

				header("Location: ../telas/seja_passeador.php");

				}

			}
			}


?>