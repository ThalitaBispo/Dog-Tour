<?php

 session_start();

 // if (!isset($_SESSION["user"])) {
 //   header('Location:index.php?erro=1');
 // }

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

    <script type="text/javascript" src="js/cep.js"></script>

    <title>Dog Tour - Saúde e Bem-estar</title>
  </head>
  <body>

    <?php
    //https://pt.stackoverflow.com/questions/195226/exibir-nome-do-usu%C3%A1rio-logado
    if(isset($_SESSION['user'])){
      include('menu_conectado.php');
    }
    else{
      include('menu_desconectado.php');
    }
    ?>

 <? 
    include_once('../funcional/consulta_pass_client_logr.php'); 

             while($row = $stmt->fetch()) {  ?>
            

    <form action="../funcional/insert_agendamento.php?cod=<?echo $codigo = $_GET['cod'];?>&client=<?echo $row['cd_cliente'];?>&log=<?echo $row['cd_endereco'];?>" method="post">

              <? } ?>

    <?

    include_once('../funcional/conexao.php');

    $codigo = $_GET['cod'];

    $stmt = $conexao->prepare("select * from tb_passeador where cd_passeador = '$codigo' ");
    $stmt->execute();

    ?>
<div class="container mt-5" >
    <h1 class="text-center" >Obrigado! Por escolher o passeador Dog Tour</h1>

    <? while($row = $stmt->fetch()) {  ?>

    <h3 class="text-center font-weight-bold" style="  color: #0B297F; ">Você escolheu o passeador <? echo $row['nm_passeador']; ?> </h3>

    <h4 class="text-center mt-4 font-weight-bold cor_texto"> Vamos agendar o passeio!! </h4>
  </div>
<center>
  <br>
    
    <section class="" style="margin-left: 350px;">
      <div class="container ">
        <div class="row">

          <div class="col-md-13 d-flex fonte  font1 shadow p-3 mb-5 rounded  border border-primary">
            <div class="align-self-center fonte">

              <div class="row">
              <div class="col-md-8">
            <div class="align-self-center">

              <img src="../funcional/<? echo $row['ds_imagem'];?>" style="margin-left: -200px;" class="rounded-circle"   width="140"  height="145">
                <h2 class="cor_texto font-weight-bold" style="margin-left:100px; margin-top: -100px;"> <? echo $row['nm_passeador']; ?> </h2>

            </div>
          </div>
          </div>
 
              <p class="text-secondary text-justify font-weight-bold " style="margin-left:180px; font-size: 23px;"> <? echo $row['nm_bairro_atende'];; ?> </p>
              <p class="text " style=" font-size:22px; color: #0B297F; margin-left:430px;"> <? echo $row['ds_valor_cobrado']; ?> </p>
              <p class="text text-justify font-weight-bold  " style=" font-size:18px; color: black; margin:8px;background: rgba(0,0, 0, 0.1); border-radius: 50px;"> <? echo $row['ds_experiencia_profissional']; ?> </p>

            </div>
          </div>
        </div>
      </div>

    </section>

</center>
   <br><br>

           <? } ?>
 <div class=" text-center text-white font-weight-bold" style="background: #FF6A17; margin-left: 105px; margin-right: 105px;" >
  <br>
 <h1> Dados para o Passerio</h1>
 <br>
 </div>
<center>
 <section  class="container  shadow p-12 mb-12 bg-white rounded " >
         
          <? include_once('../funcional/consulta_dog.php'); ?>

          <? while($row = $stmt->fetch()) {  ?>

          <div class="col-md-10 ">
          <div class="row caixa ">  
                <div class="col-6 col-sm-4 col-md-4 col-lg-6 col-xl-6">
                <label class="lead cor_texto font-weight-bold  text-justify">Nome</label>
                <input class="form-control" type="text" name="nome" value='<? echo $row['nm_animal']; ?>' placeholder="Digite o nome do seu cãozinho">
              </div><br><br>

         <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-6">
                <label class="lead cor_texto font-weight-bold ">Raça</label>
                <input class="form-control" type="text" name="raca" value='<? echo $row['nm_raca']; ?>' placeholder="Digite a raça do seu cãozinho">
            </div><br>
 </div>  

               <div class="row caixa "> 
               <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <label class="lead cor_texto font-weight-bold ">Sexo</label>
                     <select name="tempo" class="form-control">
                        <option><? echo $row['nm_genero']; ?></option>
                        <option>Macho</option>
                        <option>Fêmea</option>
                        <option>Pequeno</option>
                              </select>        
            </div>

        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                   <label class="lead lead cor_texto font-weight-bold  text-justify">Porte</label>
                    <select class="form-control">
                        <option><? echo $row['nm_porte']; ?></option>
                        <option>Pequeno</option>
                        <option>Médio</option>
                        <option>Grande</option>
            </select>
              </div>

            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                   <label class="lead cor_texto font-weight-bold ">Castrado?</label>
                    <select class="form-control">
                        <option><? echo $row['ic_castrado']; ?></option>
                        <option>Sim</option>
                        <option>Não</option>
                        <option></option>
                    </select>
            
                  </div>
                 </div>

              <div class="row caixa "> 
               <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                   <label class="lead cor_texto font-weight-bold ">Comportamento</label>
                    <select name="tempo" class="form-control">
                        <option><? echo $row['ds_comportamento']; ?></option>
                        <option>Manso</option>
                        <option>Agressivo</option>
                        <option></option>
                    </select>
                   </div>


               <!--    <div class="row caixa">  -->
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <label class="lead cor_texto font-weight-bold ">Tempo de Passeio </label>
                     <select name="tempo" class="form-control">
                        <option></option>
                        <option>30 min</option>
                        <option>1 hora</option>
                        <option>2 horas</option>
                        <option>3 horas ou mais</option>
                          </select>
                        </div>
       

            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4" >
         <label class="lead cor_texto font-weight-bold ">Período? </label>
                    <select name="periodo" class="form-control">
                      <option></option>
                        <option>Manhã</option>
                        <option>Tarde</option>
                        <option>Noite</option>
                    </select>
                      </div>
                    </div>
         <br><br>

 
                            <div class="row  caixa"> 
                              <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4" style="margin-left: 50px;">
                              <p class="lead lead cor_texto font-weight-bold">Dia da semana </p>
                              <select name="semana" class="form-control">
                      <option></option>
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
                    <input type="date" name="data" class="swing" style="margin-left: 100px;">
                    <input type="time" name="hora" class="swing" style="margin-left: 100px;">
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
<!-- </div> -->

   <? } ?>

  <br>

            <br><br>
              <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <input class="btn cor2 text-white" type="submit" value="Agendar">
              </div>
                   <br><br> <br>

                     </section>
    </center>


      </form>

     <?include('rodape.php');?>
  </body>
</html>