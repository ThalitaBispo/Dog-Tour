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

	<title>Perfil Cãozinho</title>
</head>
<body>

<?
include('menu_conectado.php');
?>

<div class="container mt-4">
	<center>

<div class="cor_texto "><h2><b>DOG:</b></h2></div>

	<?php

include_once('../funcional/consulta_dog.php');

while($row = $stmt->fetch()) { ?>

	 <form  method="POST" action="../funcional/alterarDog.php?codigo=<?php echo $row['cd_animal'];?>">

		<p>
		 <input type='text' name="nome" value='<? echo $row['nm_animal']; ?>' placeholder='Nome'>
		 <input type='text' name="raca" value='<? echo $row['nm_raca']; ?>' placeholder='Raça'>
		 <input type='text' name="ano" value='<? echo $row['aa_nascimento']; ?>' placeholder='Ano'>
		 <input type='text' name="mes" value='<? echo $row['mm_nascimento']; ?> ' placeholder='Mês'>
		 <input type='text' name="porte" value='<? echo $row['nm_porte']; ?> ' placeholder='Porte'>
		 <input type='text' name="castrado" value='<? echo $row['ic_castrado']; ?> ' placeholder='Castrado'>
		 <input type='text' name="genero" value='<? echo $row['nm_genero']; ?> ' placeholder='Genero'>
		 <input type='text' name="comportamento" value='<? echo $row['ds_comportamento']; ?> ' placeholder='Comportamento'>
		</p>

	<input type="submit" class="btn btn-outline cor2 text-white" value="Salvar">
				
		<input type="button" name="Voltar" value="Voltar" 	class=" btn btn-outline cor2 text-white botaoVoltar" onclick="javascript: location.href='index.php'">

		<?php } ?>
	
</div>
</center>
</form>

 <?include('rodape.php');?>

</body>
</html>