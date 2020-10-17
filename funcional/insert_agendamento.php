<?

      if (!empty($_POST)) 
			{
				include_once('../funcional/conexao.php');

				// $nome = $_POST['nome'];
				// $raca = $_POST['raca'];
				// $porte = $_POST['porte'];
				// $sexo = $_POST['sexo'];
				// $caracter = $_POST['caracter'];
				// $cep = $_POST['cep'];
				// $rua = $_POST['rua'];
				// $numero = $_POST['numero'];
				// $complemento = $_POST['complemento'];
				// $bairro = $_POST['bairro'];
				// $cidade = $_POST['cidade'];
				// $uf = $_POST['uf'];
				// $castrado = $_POST['castrado'];

				$tempo = $_POST['tempo'];
				$passeios = $_POST['passeios'];
				$periodo = $_POST['periodo'];
				$data = $_POST['data'];
				$hora = $_POST['hora'];
				$receber = $_POST['receber'];
				$nome_receber = $_POST['nome_receber'];
				$semana = $_POST['semana'];

				$codigo_passeador = $_GET['cod'];
				// $animal = $_GET['animal'];
				$cliente = $_GET['client'];
				$logradouro = $_GET['log'];
					
				$stm = $conexao->prepare("INSERT INTO tb_agendamento (hr_agendamento, dt_agendamento, qt_horas, cd_cliente, cd_passeador, cd_endereco, qt_passeio, nm_periodo, nm_receber, ic_receber, ds_dia_semana) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
				
				$stm->bindValue(1,$hora);
				$stm->bindValue(2,$data);
				$stm->bindValue(3,$tempo);					   
				$stm->bindValue(4,$cliente);
				$stm->bindValue(5,$codigo_passeador); 
				$stm->bindValue(6,$logradouro);					   
				$stm->bindValue(7,$passeios);
				$stm->bindValue(8,$periodo);					   
				$stm->bindValue(9,$nome_receber);
				$stm->bindValue(10,$receber);
				$stm->bindValue(11,$semana);
				
				$stm->execute();

				header("Location: ../telas/index.php");

		}

?>