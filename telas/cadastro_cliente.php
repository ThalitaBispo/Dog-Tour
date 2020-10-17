
<!DOCTYPE html>
<html>
<head>
	 <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

	<title>Perfil</title>
</head>
<body>

<?
include('menu_conectado.php');
?>



<div class="container mt-4">

	<h2>Dados Pessoais:</h2>

      <form  method="POST" action="../funcional/alterarCliente.php">

         <p>

		    <input type='text' name='nome' value=" 
		    " placeholder='Nome'>
			<input type='text' name='cpf' > 
			<input type='text' name='email'

			<h2>Endereço:</h2>

			<input type='text' name='cep' >
			<input type='text' name='rua' >
			<input type='text' name='numero' >
			<input type='text' name='complemento' >
			<input type='text' name='bairro' >
			<input type='text' name='cidade' >
			<input type='text' name='uf' >

			<h2>Contato:</h2>
			<input type='text' name='nome_contato' >
			<input type='text' name='contato' >
			<!-- <input type='password' name='senha' value="<? //echo $row['ds_senha'];?>" placeholder='Senha'> -->
			</p>

		<input type="submit" value="Salvar">
				
		<input type="button" name="Voltar" value="Voltar" 	class="botaoVoltar" onclick="javascript: location.href='index.php'">

		</form>
	
</div>

</body>
</html>