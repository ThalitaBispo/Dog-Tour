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

 <script type="text/javascript" src="js/cep.js"></script>

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
        // $nome = $_POST['nome'];
        // $email = $_POST['email'];
        // $senha = $_POST['senha'];
        $cliente = $_GET['cd'];
        ?>  

        <form method="post" action="controller_logradouro.php?cd=<? echo $cliente;?>" class="login100-form validate-form">

          <!-- <span class="login100-form-title">
             Cadastra-se
          </span>

          <div class="wrap-input100 validate-input" data-validate = "">
            <input class="input100" type="text" name="nome" placeholder="Nome" value="<?php echo $nome ?>" required>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-user" ></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input class="input100" type="email" name="email" placeholder="Email" value="<?php echo $email ?>" required>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input class="input100" type="password" name="senha" placeholder="senha" value="<?php echo $senha ?>"  id="senha" required>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
          </div> -->

          <span class="login100-form-title">
             Endereço:
          </span>

           <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input class="input100" type="text" name="cep" id="cep" placeholder="Cep" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
            </span>
          </div>


           <div class="wrap-input100 validate-input" data-validate = "Password is required">
             <button class="login100-form-btn" onclick="pesquisacep(cep.value);"> BUSCAR </button>
          </div>
              
          <div class="wrap-input100 validate-input mt-2" data-validate = "">
            <input class="input100" type="text" name="rua" placeholder= "Rua" id="rua" required>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = " ">
            <input class="input100" type="text" name="numero" placeholder=" Numero"  required>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = " ">
            <input class="input100" type="text" name="complemento" placeholder="Complemento">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              
            </span>
          </div>


          <div class="wrap-input100 validate-input" data-validate = " ">
            <input class="input100" type="text" name="bairro" placeholder="Bairro" id="bairro" required>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = " ">
            <input class="input100" type="text" name="cidade" placeholder="Cidade" id="cidade" required>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = " ">
            <input class="input100" type="text" name="uf" placeholder="Estado" id="uf" required>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              
            </span>
          </div>
          
         <div class="container-login100-form-btn">
            <button class="login100-form-btn" onclick="();">
             Cadastra-se </button>
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
  