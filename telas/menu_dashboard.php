
<link rel="stylesheet" type="text/css" href="css/style.css">

<!-- menu -->
		<div class="nav-side-menu">
		    <div class="brand">SEU LOGO AQUI</div>
		    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
		  
		        <div class="menu-list">
		  
		            <ul id="menu-content" class="menu-content collapse out">

		            	<p class=""> <? echo $_SESSION["nome_passeador"]; ?> </p>
		            	<p class=""> <? echo $_SESSION['usuario_passeador']; ?> </p>

		                <li>
		                  <a href="dashboard.php"><i class="fa fa-tachometer-alt sidebar-icon"></i> Dashboard</a>
		                </li>

		                 <li>		                 
		                    <a href="cadastro_passeador.php" id=""><i class="fa fa-tachometer-alt sidebar-icon"></i> Perfil </a>
		                 </li>

		                <li>
		                  <a href="sair.php"><i class="fa fa-tachometer-alt sidebar-icon"></i> Sair </a>
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