<?php

 session_start();

?>

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

    <script type="text/javascript" src="js/cep.js"></script>

    <script type="text/javascript" src="js/cpf.js"></script>

	<title>Perfil</title>
</head>
<body>

<?
include('menu_conectado.php');
?>



<div class="container">
	<br><br>
<center>
	<div class="cor_texto  "><h2><b>Dados Pessoais:</b></h2></div>
	<?php include_once('../funcional/consulta_cliente.php'); ?>

<? while($row = $stmt->fetch()) {  ?>
       
      <form  method="POST" action="../funcional/alterarCliente.php?codigo=<?php echo $row['cd_cliente'];?>">

         <p>

		    <input type='text' class="form-control" name='nome' value="<? echo $row['nm_cliente'];?>" placeholder='Nome'>
			<input type='text' class="form-control" name='email' value="<? echo $row['nm_usuario'];?>" placeholder='Email'>
			<input type='text' class="form-control" name='cpf' maxlength="11" value="<? echo $row['cd_cpf'];?>" placeholder='CPF' onkeypress='return event.charCode >= 48 && event.charCode <= 57' onblur="alert(TestaCPF(this.value));"> 


			<div class="cor_texto "><h2><b>Endereço:</b></h2></div>

			<input type='text' name='cep' id="cep" value="<? echo $row['cd_cep'];?>" placeholder='CEP' onkeypress='return event.charCode >= 48 && event.charCode <= 57' onMouseOut="pesquisacep(cep.value);" required>

			<!-- <input type="submit" class="btn cor2 text-white" value="BUSCAR" > -->

			<input type='text' name='rua' value="<? echo $row['nm_endereco'];?>" id="rua" placeholder='Rua'>
			<input type='text' name='numero' value="<? echo $row['cd_numero'];?>" placeholder='N°'>
			<input type='text' name='complemento' value="<? echo $row['ds_complemento'];?>" placeholder='Complemento'>
			<input type='text' name='bairro' value="<? echo $row['nm_bairro'];?>" id="bairro" placeholder='Bairro'>
			<input type='text' name='cidade' value="<? echo $row['nm_cidade'];?>" id="cidade" placeholder='Cidade'>
			<input type='text' name='uf' value="<? echo $row['sg_uf'];?>" id="uf" placeholder='Unidade Federativa'>
<br><br>
			<div class="cor_texto" ><h2><b>Contato:</b></h2></div>
			
			<input type='text' name='contato' value="<? echo $row['cd_telefone_contato'];?>" placeholder='(00) 00000-0000'>
			<!-- <input type='password' name='senha' value="<? //echo $row['ds_senha'];?>" placeholder='Senha'> -->
			</p>

		<input type="submit" class="btn btn-outline cor2 text-white" value="Salvar" >
				
		<input type="button" name="Voltar" value="Voltar" 	class=" btn btn-outline cor2 text-white botaoVoltar " onclick="javascript: location.href='index.php'">
</center>
		</form>

	<? } ?>
	
</div>

 <?include('rodape.php');?>

</body>
</html>