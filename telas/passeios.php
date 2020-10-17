<?php

 session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
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

    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <script src="js/script.js"></script>

    <title>Dog Tour - Saúde e Bem-estar</title>
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
                      <a href="dashboard.php" id="passeador"><i class=""> <img src="img/osso.png" width="30"></i> Perfil </a>
                    </li>

                    <li>
                      <a href="sair.php"><i class=""> <img src="img/osso.png" width="30"></i> Sair </a>
                    </li>
                    
                </ul>
         </div>
    </div>

    <!-- paginas -->
    <div class="main" id="pagina">
        
        <div class="container">

    <form action="" method="post">

    <section class="">
      <div class="container">
        <div class="row">

        </div>

        <?

    include_once('../funcional/conexao.php'); 

     try {

    $codigo = $_GET['cod'];

    $stmt = $conexao->prepare("select * from tb_agendamento join tb_cliente on tb_agendamento.cd_cliente = tb_cliente.cd_cliente join tb_animal on tb_animal.cd_cliente = tb_cliente.cd_cliente join tb_logradouro on tb_logradouro.cd_cliente = tb_cliente.cd_cliente where cd_agendamento = '$codigo' ");
    $stmt->execute();


  ?>

        <div class="row mt-5">

          <? while($row = $stmt->fetch()) {  ?>
            <div class="col-md-10 ">
          <div class="row caixa ">  
                <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-6">
                <label class="lead cor_texto font-weight-bold  text-justify">Nome</label>
                <input class="form-control"   readonly="true" type="text" name="nome" value='<? echo $row['nm_animal']; ?>' placeholder="Digite o nome do seu cãozinho">
              </div><br><br>

         <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-6">
                <label class="lead cor_texto font-weight-bold ">Raça</label>
                <input class="form-control"   readonly="true" type="text" name="raca" value='<? echo $row['nm_raca']; ?>' placeholder="Digite a raça do seu cãozinho">
            </div><br>
 </div>  
    <br>
         <!--    FIM -->


               <div class="row caixa "> 
               <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <label class="lead cor_texto font-weight-bold ">Sexo</label>
                     <select name="tempo"   readonly="true" class="form-control">
                        <option><? echo $row['nm_genero']; ?></option>
                        <option>Macho</option>
                        <option>Fêmea</option>
                        <option>Pequeno</option>
                              </select>        
            </div>

        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                   <label class="lead lead cor_texto font-weight-bold  text-justify">Porte</label>
                    <select class="form-control" readonly="true">
                        <option><? echo $row['nm_porte']; ?></option>
                        <option>Pequeno</option>
                        <option>Médio</option>
                        <option>Grande</option>
            </select>
              </div>

            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                   <label class="lead cor_texto font-weight-bold ">Castrado?</label>
                    <select name="tempo"  readonly="true" class="form-control">
                        <option><? echo $row['ic_castrado']; ?></option>
                        <option>Sim</option>
                        <option>Não</option>
                        <option></option>
                    </select>
            
                  </div>
                 </div>
            <!--     FIM -->


              <div class="row caixa "> 
               <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                   <label class="lead cor_texto font-weight-bold ">Comportamento</label>
                    <select name="tempo"  readonly="true" class="form-control">
                        <option><? echo $row['ds_comportamento']; ?></option>
                        <option>Manso</option>
                        <option>Agressivo</option>
                        <option></option>
                    </select>
                   </div>


               <!--    <div class="row caixa">  -->
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <label class="lead cor_texto font-weight-bold ">Tempo de Passeio </label>
                     <select readonly="true" class="form-control">
                        <option><? echo $row['qt_horas']; ?></option>
                        <option>30 min</option>
                        <option>1 hora</option>
                        <option>2 horas</option>
                        <option>3 horas ou mais</option>
                          </select>
                        </div>
       

            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4" >
         <label class="lead cor_texto font-weight-bold ">Período? </label>
                    <select readonly="true" class="form-control">
                      <option><? echo $row['nm_periodo']; ?></option>
                        <option>Manhã</option>
                        <option>Tarde</option>
                        <option>Noite</option>
                    </select>
                      </div>
                    </div>
         <br><br>
                        <center>
                              <div class="row  caixa ml-5"> 
                              <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 ml-5">
                              <p class="lead lead cor_texto font-weight-bold">Dias da semana</p>

                              <select name="semana" readonly="true" class="form-control">
                                <option><? echo $row['ds_dia_semana']; ?></option>
                                <option>Domingo</option>
                                <option>Segunda-Feira</option>
                                <option>Terça-Feira</option>
                                <option>Quarta-Feira</option>
                                <option>Quinta-Feira</option>
                                <option>Sexta-Feira</option>
                                <option>Sábado</option>
                              </select>

                            </div>

         <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-7">
         <label class="lead cor_texto font-weight-bold" style="margin-left: 100px;">Quando marcar? (data e hora) </label><br>
                    <input type="date" name="data" class="swing" style="margin-left: 100px;" value="<? echo $row['dt_agendamento']; ?>">
                    <input type="time" name="hora" class="swing" style="margin-left: 100px;" value="<? echo $row['hr_agendamento']; ?>">
              </div>
                <br>
        
         </div>  

           <div class="row caixa">    
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
             <label class="lead cor_texto font-weight-bold" style="margin-left: 100px;">Você receberá o passeador?</label><br>
                    
                    <select name="receber" class="form-control ml-5">
                        <option>Sim</option>
                        <option>Não</option>
                    </select>           
         </div>
           
   <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4" style="margin-left: 180px;">
              <p class="lead cor_texto font-weight-bold"  style="margin-left: 40px; margin-right: -50px;">Em caso da resposta ser "não", quem  o receberá?</p>
              <textarea class="form-control ml-5" name="nome_receber" rows="2"><? echo $row['nm_cliente']; ?></textarea>
         </div>
          
  </div>

<br><br>
    <!-- textarea -->

  <div class="row">
           <div class="">
                <label class="lead cor_texto font-weight-bold text-center" style="">Onde o passeador vai buscar o cãozinho?</label> <br>
                <input type='text' name='cep' id="cep" value="<? echo $row['cd_cep'];?>" placeholder='CEP' onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>

      <input type='text' name='rua' value="<? echo $row['nm_endereco'];?>" id="rua" placeholder='Rua'>

      <input type='text' name='numero' value="<? echo $row['cd_numero'];?>" placeholder='N°'>
      <input type='text' name='complemento' value="<? echo $row['ds_complemento'];?>" placeholder='Complemento'>
      <input type='text' name='bairro' value="<? echo $row['nm_bairro'];?>" id="bairro" placeholder='Bairro'>
      <input type='text' name='cidade' value="<? echo $row['nm_cidade'];?>" id="cidade" placeholder='Cidade'>
      <input type='text' name='uf' value="<? echo $row['sg_uf'];?>" id="uf" placeholder='Unidade Federativa'>
     <a href="consulta_cliente.php"> <input class="btn cor2 text-white" value="Editar Endereço"></a> 

     </div>
    </div>

      </center>


    <?  } } catch(PDOException $e) { echo 'ERROR: ' . $e->getMessage(); } ?> 

  </div>
</div>

  </body>
</html>