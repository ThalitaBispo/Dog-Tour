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
   
    if(isset($_SESSION['user'])){
      include('menu_conectado.php');
    }
    else{
      include('menu_desconectado.php');
    }
    ?>

<div class="text-center">
<h2>Dúvidas</h2>
</div>
<br>
<br>  
    
<center>
 

  
 <div class="row mx-5 ">

  <div class= "col-md-3 mx-5 shadow-lg p-3 mb-5 bg-white rounded  border border-info ">
  <img src="img/f1.png" height="80" width="80"><br><br>
  <b>Terá diferença de valor para raça, tamanho ou e bairro?</b>
  <br><br>
  Contrary to popular belief, Lorem Ipsum is not 
  simply random text. It has roots in a 
  piece of classical Latin literature from 45
  BC, making it over 2000 years old. 
  Richard McClintock, a Latin professor
    <br>
</div>

<div class= "col-md-3 mx-5 shadow-lg p-3 mb-5 bg-white rounded border border-info">
<img src="img/f2.png"height="80" width="80">
<br><br>
<b>Acessórios para passeios (coleira, guia) será por conta da empresa ou dono? </b>
<br><br>
  Contrary to popular belief, Lorem Ipsum is not 
  simply random text. It has roots in a 
  piece of classical Latin literature from 45
  BC, making it over 2000 years old. 
  Richard McClintock, a Latin professor
</div>


  <div class= "col-md-3 mx-5 shadow-lg p-3 mb-5 bg-white rounded border border-info">
  <img src="img/f1.png"height="80" width="80"><br><br>
  <b>Responsabilidade por algum problema será pela empresa? (Acidente, tratamento de higiene)</b>
  <br><br>
  Contrary to popular belief, Lorem Ipsum is not 
  simply random text. It has roots in a 
  piece of classical Latin literature from 45
  BC, making it over 2000 years old. 
  Richard McClintock, a Latin professor
    <br>
</div>

<div class= "col-md-3 mx-5 shadow-lg p-3 mb-5 bg-white rounded border border-info">
<img src="img/f2.png"height="80" width="80">
<br><br>
<b>O serviço será registrado em carteira ou apenas FREE LANCERS?</b>
<br><br>
  Contrary to popular belief, Lorem Ipsum is not 
  simply random text. It has roots in a 
  piece of classical Latin literature from 45
  BC, making it over 2000 years old. 
  Richard McClintock, a Latin professor
</div>


 
  <div class= "col-md-3 mx-5 shadow-lg p-3 mb-5 bg-white rounded border border-info">
  <img src="img/f1.png"height="80" width="80"><br><br>
  <b>Como o cliente poderá se sentir seguro e confiante deixando o seu animal com um desconhecido?</b>
  <br><br>
  Contrary to popular belief, Lorem Ipsum is not 
  simply random text. It has roots in a 
  piece of classical Latin literature from 45
  BC, making it over 2000 years old. 
  Richard McClintock, a Latin professor
    <br>
</div>

<div class= "col-md-3 mx-5 shadow-lg p-3 mb-5 bg-white rounded border border-info">
<img src="img/f2.png"height="80" width="80">
<br><br>
<b> Vocês terão empresas conveniadas? (Que promovem algum tipo de Desconto)</b>
<br><br>
  Contrary to popular belief, Lorem Ipsum is not 
  simply random text. It has roots in a 
  piece of classical Latin literature from 45
  BC, making it over 2000 years old. 
  Richard McClintock, a Latin professor
</div>



<div class= "col-md-3 mx-5 col-md-2 mx-5 shadow-lg p-3 mb-5 bg-white rounded border border-info">
  <img src="img/f1.png"height="80" width="80"><br><br>
  <b>Vocês terão planos mensais?</b>
  <br><br>
  Contrary to popular belief, Lorem Ipsum is not 
  simply random text. It has roots in a 
  piece of classical Latin literature from 45
  BC, making it over 2000 years old. 
  Richard McClintock, a Latin professor
    <br>
</div>

<div class= "col-md-3 mx-5 col-md-2 mx-5 shadow-lg p-3 mb-5 bg-white rounded border border-info">
  <img src="img/f1.png"height="80" width="80"><br><br>
  <b>Leva e Traz</b>
  <br><br>
  Contrary to popular belief, Lorem Ipsum is not 
  simply random text. It has roots in a 
  piece of classical Latin literature from 45
  BC, making it over 2000 years old. 
  Richard McClintock, a Latin professor
    <br>
</div>

<div class= "col-md-3 mx-5 col-md-2 mx-5 shadow-lg p-3 mb-5 bg-white rounded border border-info">
  <img src="img/f1.png"height="80" width="80"><br><br>
  <b>Leva e Traz</b>
  <br><br>
  Contrary to popular belief, Lorem Ipsum is not 
  simply random text. It has roots in a 
  piece of classical Latin literature from 45
  BC, making it over 2000 years old. 
  Richard McClintock, a Latin professor
    <br>
</div>
</center>
</seletion>

      <center>
<a href="Contrate o serviço.html" class="btn cor2 text-white">Marque um passeio  </a>
 </center>

 <?include('rodape.php');?>

  </body>
</html>