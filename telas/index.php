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
    
    <section class="" id="home"> 
      <div class="container ">
        <div class="row ">
          <div class="col-md-6 d-flex"> 
            <div class="align-self-center">


              <h1>A saúde de seu cão em primeiro lugar</h1>

              <p>
                Profissionais certificados para passear com o seu cãozinho.
            </p>
      
 <form class="mt-4 mb-4
  ">
                <div class="input-group input-group-lg">
                  <input type="text" placeholder="Seu seu endereço" class="form-control ">
                  <div class="input-group-append">
                    <button type="button" class="btn btn-primary display mt-1"> Buscar  </button>
                  </div>
                </div>
              </form>

            </div>
          </div> 
          

          <div class="col-md-10 d-none d-md-block">  
          </div>
        </div>
      </div>
    </section>  

    <section class="caixa  "> <!-- Inicio oque é dog walk -->
      <div class="container ">
        <div class="row">

           <div class="col-md-6 "> 
 
              <img src="img/ft1.jpg"  width="400" class="img-fluid">
          </div>

          <div class="col-md-6 d-flex fonte p-3 mb-5 font1 efeito1   shadow p-3 mb-5 bg-white rounded"> <!-- border border-primary-->
            <div class="align-self-center fonte">
              <h2 class="text"><b>Contrate o serviço de passeador</b></h2>
              <p class="text2 text-justify" style="font-size: 18px;">
               Encontre um serviço de passeador de cães, de qualidade e 
               confiança para gastar a energia de seu cão, com brincadeiras 
               divertidas deixando o seu fiel amigo feliz e satisfeito.
              </p>
              <a href="agendamento.php" class=" btn btn-outline cor2 text-white">Veja mais</a> <!--hiper -->
            </div>
          </div>
        
        </div>
      </div>

     <section class="caixa cor_bloco"> <!-- Inicio como funciona -->

      <div class=" text-center font2">
        <h1 class="text"><b>Um passeio em apenas 3 passos</b></h1><br><br>
      </div>

      <div class="container d-flex espaco">
 
        <div class="row">


         <div class="col-md-3 shadow-lg p-4 mb-5 rounded text-center font1 efeito1 ">
        <img src="img/mapa.png" class="img-fluid" width="200"><br><br><br>
        <h4 class="text "><b>Busque um passeador </b></h4>
        <p class="text2">
           Busque um passeador profissional qualificado que beneficie um passeio agradável para seu cão.
        </p>
      </div>
<br>
       <div class="col-md-3 shadow-lg p-4 mb-5 ml-4 rounded text-center  font1 efeito1 ">
        <img src="img/agendamento.png" class="img-fluid" width="200"><br><br><br><br>
        <h4 class="text"> <b>Agende</b></h4>
        <p class="text2 ">Não perca tempo, agende dia e hora para que seu gaste sua energia com nossos passeadores qualificados.
        </p>
      </div>

      <div class="col-md-3 shadow-lg p-4  mb-5 ml-4 rounded text-center font1 efeito1">
        <img src="img/feliz.png" class="img-fluid" width="200"><br><br><br><br>
        <h4 class="text"><b>Dog feliz!</b></h4>
        <p class="text2">
            Garantimos total segurança e tranquilidade para seu cão assim deixnado seu dog  saudável e feliz com o passeio
        </p>
      </div>

        </div>
      </div>
      <center>
      <a href="agendamento.html" class="btn btn-outline cor2 text-white text-center">Marque um passeio  </a>
    </center>
</section> <!-- /fim seção como funciona  -->


  <section class="caixa"> <!-- Inicio seção passeadores -->

      <div class=" text-center font2">
        <h1 class="text"><b>Alguns dos nossos passeadores</b></h>
      </div>
<br><br>
      <div class="container d-flex espaco">
 
        <div class="row">


         <div class="col-md-3 shadow-lg p-4 mb-5 rounded text-center font1 efeito1 w-auto p-3">
        <img src="img/jennifer.jpg" class="img-fluid" width="220 " ><br><br>
        <h4 class="text"><b>Jennifer Venancio</b></h4>
        <p class="text2 ">
           18 anos 1 ano de experiencias com caes

        </p>
      </div>
<br>
       <div class="col-md-3 shadow-lg p-4 mb-5 ml-4 rounded text-center  font1 efeito1 ">
        <img src="img/pedro.jpg" class="img-fluid" width="220" ><br><br>
        <h4 class="text"><b>Pedro Henrique</b></h4>
        <p class="text2 ">20 anos e 2 anos de experiencias com dogs

        </p>
      </div>

      <div class="col-md-3 shadow-lg p-4  mb-5 ml-4 rounded text-center font1 efeito1">
        <img src="img/2.jpg" class="img-fluid" width="220" height="400"><br><br>
        <h4 class="text"><b>Leticia Camilo</b></h4>
        <p class="text2">
           20 anso e 5 anos de experiencias com dogs
        </p>
      </div>

       </div>
      </div>
      <center>
      <a href="agendamento.html" class="btn btn-outline cor2 text-white text-center">Marque um passeio  </a>
      </center>
 </section> <!-- /fim seção passeadores  -->


     <section class="caixa img_fundo2 "> <!-- corrosel comentarios-->
      <div class="container  ">
    <center>
<h1 class=" text "><b>Comentários<b></h1>
<br>

<div class="slideshow-container">

          <div class="mySlides fade">
       
            <img src="img/comentarios/c1.png"  src="img/jennifer.jpg" style="width:98%">


          </div>

         <div class="mySlides fade">
     
              <img src="img/comentarios/c2.png" style="width:98%">

          </div>

          <div class="mySlides fade">

            <img src="img/comentarios/c3.png" style="width:98% ">
       </div>
      </div>
      </div>

<br>
<br>


<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

     <script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
      </script>
    </section> <!-- corossel passeadores-->


<br>
<br>

  <div class=" text-center font2  "> <!-- Inicio beneficios-->
     <h1 class="text"><b> Beneficios do passeio</b></h1>
     <br>
 </div>

  <div class="row ">
  <div class="col-md-4 shadow-lg p-4  mb-5  cor3 rounded text-center font1 efeito1  ">
     <img src="img/saude.png" height="80 width="80"><br>
     Promove a saúde e o bem estar <br>
     Queima calorias e evita a obesidade
  </div>


 <div class="col-md-4 shadow-lg p-4  mb-5 cor3 rounded text-center font1 efeito1">
     <img src="img/osso.png"height="80 width="80"><br>
     Inibe o comportamento destrutivo<br>
     Aumenta o contato com a natureza 
</div>

 
 <div class="col-md-4 shadow-lg p-4  mb-5 cor3 rounded text-center font1 efeito1">
     <img src="img/casa.png"height="60" width="60"><br> <br>
     Estimula a socialização com outros cães<br>
     Deixa seu Dog ao volta pra casa.
</div>
</div>
 
  <center>
  <a href="Contrate o serviço.html" class="btn btn-outline cor2 text-white text-center">Marque um passeio </a>
 </center>   <!-- Fim beneficios -->

 <?include('rodape.php');?>

  </body>
</html>