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
    
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css"    href="css/estilo.css">

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

    <?include_once('../funcional/consulta_agendamento.php'); ?>
    <form method="post" action="<? echo $_SERVER['PHP_SELF']; ?>">


   

    <section class="" > 
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex"> 
            <div class="align-self-center">



      
<div class="mt-5">
          
         
                  <div class="cor_texto font-weight-bold ml-4 "  style="font-size: 20px;">	Bairro</div>

                  <div class="row">
              <div class="col-md-8">
            <div class="align-self-center ml-2">
       
              <div class="div-select">
              <select class=""  name="bairro">
                <option></option>
                <option>Andaraguá</option>
                <option>Anhanguera</option>
                <option>Aviação</option>
                <option>Bairro Militar</option>
                <option>Balneário Maracanã</option>
                <option>Boqueirão</option>
                <option>Caiçara</option>
                <option>Caieiras</option>
                <option>Caminho da Serra</option>
                <option>Cidade da Criança</option>
                <option>Cohab</option>
                <option>Distrito Sede de Praia Grande</option>
                <option>Duque de Caxias</option>
                <option>Emissário</option>
                <option>Flórida</option>
                <option>Canto do Forte</option>
                <option>Guariúma</option>
                <option>Intermares</option>
                <option>Jardim Aloha</option>
                <option>Jardim Esmeralda</option>
                <option>Jardim Glória</option>
                <option>Jardim Guilhermina</option>
                <option>Jardim Imperador</option>
                <option>Jardim Quietude</option>
                <option>Jardim Real</option>
                <option>Jardins</option>
                <option>Maxland</option>
                <option>Melvi</option>
                <option>Mirim</option>
                <option>Ocian</option>
                <option>Parque das Américas</option>
                <option>Pedra de Tórguer</option>
                <option>Ribeirópolis</option>
                <option>Samambaia</option>
                <option>Sanharol</option>
                <option>Santa Helena</option>
                <option>Santa Mathilde</option>
                <option>Sítio do Campo</option>
                <option>Sítio dos Jesuítas</option>
                <option>Solemar</option>
                <option>Trilha da Adutora</option>
                <option>Tude Bastos</option>
                <option>Tupi</option>
                <option>Tupiry</option>
                <option>Vila Sônia</option>
                <option>Vila Tupi</option>
                <option>Ximeno de Villeroy</option>
                <option>Xixová</option>
                </select>

              </div>
               <input type="submit"  style="margin-left:260px; margin-top: -70px;" class="btn btn-outline cor2 text-white" name="Buscar">
            </div>
          </div>
</div>
                 
                    </div> 
                    </div> 
        </section>
  <br><br> <br> <br>
        <iframe class="float-right "  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233239.78145331886!2d-46.63838231964248!3d-24.017958331440074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce1d00114834dd%3A0xd9331312b249a764!2sPraia%20Grande%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1574171850346!5m2!1spt-BR!2sbr" width="600" height="2000" frameborder="0" style="border:0; margin-top: 2px; margin-right: 20px;" allowfullscreen=""></iframe>
        
  
        <? while($row = $stmt->fetch()) {  ?>

    <section class=""> <!-- Inicio oque é dog walk -->
      <div class="container ">
        <div class="row">

          <div class="col-md-13 d-flex fonte  font1 shadow p-3 mb-5 rounded  border border-primary">
            <div class="align-self-center fonte">

              <div class="row">
              <div class="col-md-8">
            <div class="align-self-center ml-2">

              <img src="../funcional/<? echo $row['ds_imagem'];?>" class="rounded-circle"   width="140"  height="145">
                <h2 class="cor_texto font-weight-bold" style="margin-left:160px; margin-top: -100px;"> <? echo $row['nm_passeador']; ?> </h2>

            </div>
          </div>
          </div>
 
              <p class="text-secondary text-justify font-weight-bold " style="margin-left:170px; font-size: 23px;"> <? echo $row['nm_bairro_atende'];; ?> </p>
              <p class="text " style=" font-size:22px; color: #0B297F; margin-left:430px;"> <? echo $row['ds_valor_cobrado']; ?> </p>
              <p class="text text-justify font-weight-bold  " style=" font-size:18px; color: black; margin:8px;background: rgba(0,0, 0, 0.1); border-radius: 50px;"> <? echo $row['ds_experiencia_profissional']; ?> </p>
<br>
              <a href="agendar.php?cod=<? echo $row['cd_passeador']; ?>" class=" btn btn-outline cor2 text-white">Agendar</a> 
            </div>
          </div>
        
        </div>
      </div>


    </section>
      
  <? } ?>

</form>

     <?include('rodape.php');?>

  </body>
</html>