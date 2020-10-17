
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <header > <!-- inicio Cabecalho -->
      <nav class="navbar navbar-expand-sm navbar-light " id="home" > <!-- bg-warning = definir o backgroud com a cor-->
        <div class="container menu">
          
          <a href="index.php" class="">
            <spam class="text_logo cor_texto ml-2"> Dog</spam><span class="text_logo text-white">Tour</span>
            <img src="IMG/logos/cachorrobranco.png" width="80">
          </a>

          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
            <span class="navbar-toggler-icon"> <!-- navbar-toggler-icon = icone das barras - para responsividade --> 
            </span>
          </button>

            <div class="collapse navbar-collapse" id="nav-principal">
            <ul class="navbar-nav menu-list ml-auto"> <!-- ml-auto = margem para direita automatica -->
            
            <li class="nav-item shadow-sm p-3 mb-5 btn-outline-primary  rounded "> <!--shadow-lg p-1 mb-1  btn-outline-light  rounded da a cor branca e sombra no botao-->
              <a href="index.php" class="nav-link text-white"><b>Home</b></a>
            </li>

             <li class="nav-item shadow-sm p-3 mb-5  btn-outline-primary rounded">
              <a href="quem_somos.php" class="nav-link text-white"><b>Quem somos</b></a>
            </li>

            <li class="nav-item shadow-sm p-3 mb-5   btn-outline-primary rounded">
              <a href="seja_passeador.php" class="nav-link text-white"><b>Seja um Passeador</b></a>
            </li>

              <li class="nav-item shadow-sm p-3 mb-5  btn-outline-primary rounded">
              <a href="contato.php" class="nav-link text-white"><b>Contato</b></a>
            </li>   

            <li class="p-3 mb-5">

            <!-- 	 <img src="img/jennifer.jpg" style="width: 60px; height: 60px" alt="..."> -->

            <div class="dropdown">
              <button class="btn btn cor2 dropdown-toggle text-white" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <? echo $_SESSION['user']; ?>
            </button>

            <div class="dropdown-menu  ">
              <p class="text-center"> <? echo $_SESSION['user']; ?> </p> <!-- deixar o nome e o email no meio -->
              <p class="text-center"> <? echo $_SESSION['email']; ?> </p>

              <div class="dropdown-divider"></div>

              <a class="dropdown-item "  href="consulta_cliente.php"> Perfil </a> <!-- colocar icones -->

              <a class="dropdown-item " href="consulta_dog.php">Perfil Dog</a>
              
              <a class="dropdown-item" href="agendamento.php">Agendar</a>

              <div class="dropdown-divider"></div>

             <a class="dropdown-item " href="sair.php">Sair</a>

            </div>

          </div>

            </li>

            </ul>
          </div>


        </div>
      </nav>
    </header> <!-- /fim Cabecalho -->