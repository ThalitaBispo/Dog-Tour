<?php

    $host = 'localhost'; //host do banco
	$dbname = 'db_dogtour'; //nome da base de dados
	$user = 'root'; //usuario do banco
	$senha = ''; //senha do usuario host

	try{
			//criou a variavel conexao e atribuiu a ela uma instancia do objeto PDO (nativo do php - 5.1)
				$conexao = new PDO( //passar tres parametros para instanciar o objeto
					"mysql:host=$host;dbname=$dbname", $user, $senha //aqui q acontece a magica, esse é o codigo da conexao

				);
				$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //permite adicionar atributos no objeto de conexão
				
			} catch (PDOException $e){ //retorna erros caso houver
				echo '<p>'.$e->getMessege().'</p>'; //menssagem de erro
			}

?>