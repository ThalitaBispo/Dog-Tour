<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Login V1</title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
 <script type="text/javascript" src="js/senha.js"></script>

</head>

<body>
  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt>   
            <a class="txt2" href="index.html    ">
       <img src="img/Logos/icone1.png" alt="IMG" >
            </a>
        </div>

        <?php
        $cliente = $_GET['cd'];
        ?>  

        <form method="post" action="controller_dog.php?cd=<? echo $cliente;?>" class="login100-form validate-form">
          <span class="login100-form-title">
             Perfil Dog:
          </span>

          <div class="wrap-input100 validate-input" data-validate = "">
            <input class="input100" type="text" name="nome" placeholder= "Nome " required>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = " ">
            <input class="input100" type="text" name="mes" placeholder="Mês Nascimento" required>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              
            </span>
          </div>


          <div class="wrap-input100 validate-input" data-validate = " ">
            <input class="input100" type="text" name="ano" placeholder=" Ano Nascimento" required>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = " ">
            <input class="input100" type="text" name="raca" placeholder=" Raça"  required>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = " ">
            <input class="input100" type="text" name="porte" placeholder="Porte"  required>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
            </span>
          </div>

            <div class="wrap-input100 validate-input" data-validate = " ">
            <input class="input100" type="text" name="sexo" placeholder="Sexo"  required>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              
            </span>
          </div>
            <div class="wrap-input100 validate-input" data-validate = " ">
            <input class="input100" type="text" name="comportamento" placeholder="Comportamento do Dog"  required>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              
            </span>
          </div>
           <div class="wrap-input100 validate-input" data-validate = " ">
            <input class="input100" type="text" name="castrado" placeholder=" Seu dog é Castrado"  required>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              
            </span>
          </div>
          
         <div class="container-login100-form-btn">
            <button class="login100-form-btn" onclick="();">
             Cadastrar </button>
          </div>

         

          <div class="text-center p-t-136">
            <a class="txt2" href="entra.html    ">
        Voltar ao loggin
              <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>





</body>
</html>
  