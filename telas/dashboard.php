<?php

 session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Ajax com jQuery</title>

		<!-- estilos -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="css/style.css">

		<!-- script -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		
		<script src="js/script.js"></script>
		
	</head>

	<body>

<!-- menu -->
		<div class="nav-side-menu">
			<br> <br>
                         <center>
		    <div class="brand mt-4 ml-4"> <img src="img/logos/cachorrobranco.png"  width="80"> </div>
		      <spam class="text_logo cor_texto "> Dog</spam>
		      <span class="text_logo text-white">Tour</span><br><br>
		 		    <a class=" "> 
		 		     <?php include_once('../funcional/consulta_dashboard.php'); ?>
		 		    	  <? while($row = $stmt->fetch()) {  ?>
		 		      <img src="../funcional/<? echo $row['ds_imagem'];?>" width="120"> 
		 		   <? } ?>
		 		  </center> 
		 		</a>
		        <div class="menu-list">
		  
		            <ul id="menu-content" class="menu-content collapse out">
		            	<p class=" text-center font-weight-bold p-1 cor_nome"> <? echo $_SESSION["nome_passeador"]; ?> </p>
		            	<p class="text-center font-weight-bold cor_name text-white"> <? echo $_SESSION["usuario_passeador"]; ?> </p>

		                <li>
		                  <a href="dashboard.php"><i class="" > <img src="img/osso.png" width="30"></i> Dashboard</a>
		                </li>

		                 <li>
		                  <a href="#" id="passeador"><i class=""> <img src="img/osso.png" width="30"></i> Perfil </a>
		                </li>

		                <li>
		                  <a href="sair.php"><i class=""> <img src="img/osso.png" width="30"></i> Sair </a>
		                </li>
		                
		                <!-- <li  data-toggle="collapse" data-target="#ajuda" class="collapsed">
		                    <a href="#"><i class="fa fa-life-ring sidebar-icon"></i> Cadastro <span class="arrow"><i class="fa fa-angle-down"></i></span> </a>
		                </li>
		                <ul class="sub-menu collapse" id="ajuda">
		                    <li><a href="#" id="documentacao"><i class="fa fa-angle-right"></i> Documentação</a></li>
		                    <li><a href="#" id="suporte"><i class="fa fa-angle-right"></i> Suporte <small><i class="fa fa-external-link"></i></small></a></li>
		                </ul> -->
		            </ul>
		     </div>
		</div>

		<!-- paginas -->
		<div class="main" id="pagina">
		    
		    <div class="container">

		    	<div class="row">
		    		<div class="col">
						
						<form>
							<div class="form-group row">
								<label class="col-sm-9 col-form-label"><h2>Competência:</h2></label>
								<!-- <div class="col-sm-3">
									<select class="form-control-plaintext" id="competencia">
										<option value="">-- Selecione </option>
										<option value="2018-08">Agosto / 2018</option>
										<option value="2018-09">Setembro / 2018</option>
										<option value="2018-10">Outubro / 2018</option>
									</select>
								</div> -->
							</div>
						</form>

						<hr />

		    		</div>
		    	</div>

		    	<? include_once('../funcional/totalPasseios.php');

		    	while($row = $stmt->fetch()) { ?>
		    	
		    	<div class="row mb-3" style="cursor: pointer">
		    		<div class="col-md-4" onclick="location.href = 'dashboard.php?totalPasseios=1';">
		    			<div class="card text-white bg-primary ">
							<div class="card-header">
								Total de passeios
							</div>
							<div class="card-body">
								 <h5 class="card-title" id="numeroVendas"><? echo $row['totalPasseios']; ?></h5>
							</div>
						</div>
					</div>

					<? } ?>

					<?include_once('../funcional/agendamento.php'); 
					while($row = $stmt->fetch()) { ?>

					<div class="col-md-4" onclick="location.href = 'dashboard.php?agendamentos=1';">
		    			<div class="card text-white bg-dark">
							<div class="card-header">
								Agendamentos
							</div>
							<div class="card-body">
								 <h5 class="card-title" id="totalVendas"><? echo $row['Agendamento']; ?></h5>
							</div>
						</div>
		    		</div>

		    		<? } ?>

				<!-- </div> -->

				<?include_once('../funcional/totalCliente.php'); 
					while($row = $stmt->fetch()) { ?>

				<!-- <div class="row mb-3"> -->
					<div class="col-md-4" onclick="location.href = 'dashboard.php?clientes=1';">
		    			<div class="card text-white bg-danger">
							<div class="card-header">
								Clientes 
							</div>
							<div class="card-body">
								 <h5 class="card-title"><? echo $row['totalClientes']; ?></h5>
							</div>
						</div>
					</div>

					<? } ?>

		    	</div>

		    		    </div>

		    		    <!-- _______________________________________________________________ -->

		    		    <? if(isset($_GET['totalPasseios'])==1){ ?>

		    		    <? include_once('../funcional/total_passeios_tabela.php'); ?>

		    		    <table class="table table-bordered mt-5">
		    		    	
		    		    	<thead>
		    		    		<tr class="bg-primary">
		    		    			<th scope="col">#</th>
		    		    			<th scope="col">Cliente</th>
		    		    			<th scope="col">Cãozinho</th>
		    		    			<th scope="col">Data</th>
		    		    		</tr>
		    		    	</thead>

		    		    	<? while($row = $stmt->fetch()) {  ?>

		    		    	<tbody class="" id="">
		    		    		<tr class="table-light" style="cursor: pointer" onclick="location.href = 'passeios.php?cod=<?echo $row['cd_agendamento'];?>';">
		    		    			<th scope="row"><?echo $row['cd_agendamento'];?></th>
		    		    			<td><?echo $row['nm_cliente'];?></td>
		    		    			<td><?echo $row['nm_animal'];?></td>
		    		    			<td><?echo date("d/m/Y", strtotime($row['dt_agendamento'])) ?></td>
		    		    		</tr>

		    		    		<!-- <tr class="bg-primary">
		    		    			<th scope="row">2</th>
		    		    			<td>Jacob</td>
		    		    			<td>Thornton</td>
		    		    			<td>@fat</td>
		    		    		</tr> -->

		    		    	</tbody>
		    		    	<? } ?>
		    		    </table>

		    		    <? } ?>

		    		    <!-- _______________________________________________________________ -->

		    		    <? if(isset($_GET['agendamentos'])==1){ ?>

		    		    <? include_once('../funcional/tabela_agendamento.php'); ?>

		    		    <table class="table table-bordered mt-5">
		    		    	
		    		    	<thead>
		    		    		<tr class="bg-dark text-white">
		    		    			<th scope="col">#</th>
		    		    			<th scope="col">Cliente</th>
		    		    			<th scope="col">Cãozinho</th>
		    		    			<th scope="col">Data</th>
		    		    			<th scope="col">Horário</th>
		    		    		</tr>
		    		    	</thead>

		    		    	<? while($row = $stmt->fetch()) {  ?>

		    		    	<tbody class="">
		    		    		<tr class="table-light" style="cursor: pointer" onclick="location.href = 'passeios.php?cod=<?echo $row['cd_agendamento'];?>';">
		    		    			<th scope="row"><?echo $row['cd_agendamento'];?></th>
		    		    			<td><?echo $row['nm_cliente'];?></td>
		    		    			<td><?echo $row['nm_animal'];?></td>
		    		    			<td><?echo date("d/m/Y", strtotime($row['dt_agendamento'])) ?></td>
		    		    			<td><?echo $row['hr_agendamento'];?></td>
		    		    		</tr>

		    		    	</tbody>
		    		    	<? } ?>
		    		    </table>
		    		    <? } ?>

		    		    <!-- _______________________________________________________________ -->

		    		    <? if(isset($_GET['clientes'])==1){ ?>

		    		    <? include_once('../funcional/tabela_cliente.php'); ?>

		    		    <table class="table table-bordered mt-5">
		    		    	
		    		    	<thead>
		    		    		<tr class="bg-danger text-white">
		    		    			<th scope="col">#</th>
		    		    			<th scope="col">Cliente</th>
		    		    			<th scope="col">Cãozinho</th>
		    		    		</tr>
		    		    	</thead>

		    		    	<? while($row = $stmt->fetch()) {  ?>

		    		    	<tbody class="">
		    		    		<tr class="table-light">
		    		    			<th scope="row"><?echo $row['cd_agendamento'];?></th>
		    		    			<td><?echo $row['nm_cliente'];?></td>
		    		    			<td><?echo $row['nm_animal'];?></td>
		    		    		</tr>

		    		    	</tbody>
		    		    	<? } ?>
		    		    </table>
		    		    <? } ?>

		    		</div>

		    		<span class="back-to-top">
		    			<img src="img/back-to-top.png" width="60" height="60" class="" alt="">
		    		</span>

    </body>

</html>