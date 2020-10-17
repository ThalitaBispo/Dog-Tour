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

    <title>Quem Somos</title>
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

<section class="caixa  "> <!-- Inicio Quem somos -->
      <div class="container ">
        <div class="row">
          <div class="col-md-6 d-flex">
            <div class="align-self-center text-justify">
             <div class="text4"> <h2> <b>Dog Tour</b> </h2> </div>
              <p>
                Com objetivo de desenvolver um projeto de TCC, um grupo de estudantes, viu
uma forma de transformar o projeto em realidade. A Dog Tour deu início em 2019,
tendo como objetivo oferecer o melhor serviço de passeadores de cães para baixada
santista, nosso foco e para pessoas que procuram um serviço de qualidade e tem
como importância a saúde animal e seu desenvolvimento.<br>
 Sabemos que grande parte da população brasileira tem um cãozinho de estimação que considera como
um membro da família.Com objetivo de desenvolver um projeto de TCC, um grupo de estudantes, viu
uma forma de transformar o projeto em realidade.
 A Dog Tour deu início em 2019,tendo como objetivo oferecer o melhor serviço
  de passeadores de cães para baixada
santista, nosso foco e para pessoas que procuram um serviço de qualidade e tem
como importância a saúde animal e seu desenvolvimento. Sabemos que grande
parte da população brasileira tem um cãozinho de estimação que considera como
um membro da família.
         </p>
         </div>
          </div> 
              <div class="col-md-6"><br>
              <img src="img/fundo2.jpg"  width="500">
          </div>
         </div>
      </div>
    </section> <!-- seçao quem somos -->
   <br>
   <br>
   <br>

  <!-- <h2 style="text-align:center;" class="text">Equipe</h2> <!-- eção equipe -->
    <br>
    <br>
 
  <?include('rodape.php');?>

  
  </body>
</html>