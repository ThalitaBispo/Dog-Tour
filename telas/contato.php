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

    <title>Contato</title>
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

    <br> <br>

    <div class="ola">
  <center> <h2>Fale conosco</h2></center>

</div>
<section>

        <div class="container  shadow-lg p-3 mb-2 bg-white rounded  ">
          <div class="row ">


            <div class="col-md-6 ">
              <img src="img/doog1.png"  width="500">
            </div>

            <div class="col d  ">
              <div class="align-self-center ">
              
         <form>
<br>
    <div class="form-group">
    <label for="exampleFormControlInput1"><b>Nome:</b></label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="DogTour">
    </div>

    
     <div class="form-group ">
    <label for="exampleFormControlInput1"><b>Email:</b></label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="dogtour@exemplo.com">
      </div>


      <div class="form-group ">
    <label for="exampleFormControlInput1 "><b>Descrição:</b></label>
    <textarea class="form-control"></textarea>
  </div>


     <button  type ="submit" class=" btn btn-outline cor2 text-white"  onclick="cadastro()">Enviar
     </button>
   <button type="reset" class=" btn btn-outline cor2 text-white">Limpar</button>   
  </form>


   <script>
    function cadastro(){
  alert('Ficaremos feliz em ajuda.');
}
</script>

         

              </div>
            </div>
          </div>
        </div>

      </section> <!-- /fim seção saiba-->
<br><br><br><br>


      <?include('rodape.php');?>
    
  </body>
</html>