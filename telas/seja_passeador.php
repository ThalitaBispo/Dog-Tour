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

    <title>Seja Passeador</title>
    <script >
       function validadata(){
   var data = document.getElementById("nascimento").value; // pega o valor do input
   data = data.replace(/\//g, "-"); // substitui eventuais barras (ex. IE) "/" por hífen "-"
   var data_array = data.split("-"); // quebra a data em array
   
   // para o IE onde será inserido no formato dd/MM/yyyy
   if(data_array[0].length != 4){
      data = data_array[2]+"-"+data_array[1]+"-"+data_array[0]; // remonto a data no formato yyyy/MM/dd
   }
   
   // comparo as datas e calculo a idade
   var hoje = new Date();
   var nasc  = new Date(data);
   var idade = hoje.getFullYear() - nasc.getFullYear();
   var m = hoje.getMonth() - nasc.getMonth();
   if (m < 0 || (m === 0 && hoje.getDate() < nasc.getDate())) idade--;
   
   if(idade < 18){
      alert("Pessoas menores de 18 não podem se cadastrar.");
      return false;
   }

   if(idade >= 18 && idade <= 60){
      alert("Maior de 18, pode se cadastrar.");
      return true;
   }
   
   // se for maior que 60 não vai acontecer nada!
   return false;
}
     </script>


<script type="text/javascript" >
      
      function TestaCPF(strCPF) {
        var Soma;
        var Resto;
        Soma = 0;
        if (strCPF == "00000000000") return "CPF INVÁLIDO";
        if (strCPF == "11111111111") return "CPF INVÁLIDO";
        if (strCPF == "22222222222") return "CPF INVÁLIDO";
        if (strCPF == "33333333333") return "CPF INVÁLIDO";
        if (strCPF == "44444444444") return "CPF INVÁLIDO";
        if (strCPF == "55555555555") return "CPF INVÁLIDO";
        if (strCPF == "66666666666") return "CPF INVÁLIDO";
        if (strCPF == "77777777777") return "CPF INVÁLIDO";
        if (strCPF == "88888888888") return "CPF INVÁLIDO";
         if (strCPF == "99999999999") return "CPF INVÁLIDO";
         
        for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
        
        Resto = (Soma * 10) % 11;
         
        if ((Resto == 10) || (Resto == 11))  Resto = 0;
        
        if (Resto != parseInt(strCPF.substring(9, 10)) ) return "CPF INVÁLIDO";
         
        Soma = 0;
        
        for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
        
        Resto = (Soma * 10) % 11;
         
        if ((Resto == 10) || (Resto == 11))  Resto = 0;
        
        if (Resto != parseInt(strCPF.substring(10, 11) ) ) return "CPF INVÁLIDO";
        
        return "CPF VÁLIDO";
      }
      
      //var strCPF = "12345678909";
      //alert(TestaCPF(strCPF));
      
      function limpa_formulário_cep() {
          //Limpa valores do formulário de cep.
          document.getElementById('rua').value=("");
          document.getElementById('bairro').value=("");
          document.getElementById('cidade').value=("");
          document.getElementById('uf').value=("");
          
      }

      function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
          //Atualiza os campos com os valores.
          document.getElementById('rua').value=(conteudo.logradouro);
          document.getElementById('bairro').value=(conteudo.bairro);
          document.getElementById('cidade').value=(conteudo.localidade);
          document.getElementById('uf').value=(conteudo.uf);
          
        } //end if.
        else {
          //CEP não Encontrado.
          limpa_formulário_cep();
          alert("CEP não encontrado.");
        }
      }
        
      function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

          //Expressão regular para validar o CEP.
          var validacep = /^[0-9]{8}$/;

          //Valida o formato do CEP.
          if(validacep.test(cep)) {

            //Preenche os campos com "..." enquanto consulta webservice.
            document.getElementById('rua').value="...";
            document.getElementById('bairro').value="...";
            document.getElementById('cidade').value="...";
            document.getElementById('uf').value="...";
            

            //Cria um elemento javascript.
            var script = document.createElement('script');

            //Sincroniza com o callback.
            script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

            //Insere script no documento e carrega o conteúdo.
            document.body.appendChild(script);

          } //end if.
          else {
            //cep é inválido.
            limpa_formulário_cep();
            alert("Formato de CEP inválido.");
          }
        } //end if.
        else {
          //cep sem valor, limpa formulário.
          limpa_formulário_cep();
        }
      };
    </script>
    <!-- maior de 18 -->
     <script >
       function validadata(){
   var data = document.getElementById("nascimento").value; // pega o valor do input
   data = data.replace(/\//g, "-"); // substitui eventuais barras (ex. IE) "/" por hífen "-"
   var data_array = data.split("-"); // quebra a data em array
   
   // para o IE onde será inserido no formato dd/MM/yyyy
   if(data_array[0].length != 4){
      data = data_array[2]+"-"+data_array[1]+"-"+data_array[0]; // remonto a data no formato yyyy/MM/dd
   }
   
   // comparo as datas e calculo a idade
   var hoje = new Date();
   var nasc  = new Date(data);
   var idade = hoje.getFullYear() - nasc.getFullYear();
   var m = hoje.getMonth() - nasc.getMonth();
   if (m < 0 || (m === 0 && hoje.getDate() < nasc.getDate())) idade--;
   
   if(idade < 18){
      alert("Pessoas menores de 18 não podem se cadastrar.");
      return false;
   }

   if(idade >= 18 && idade <= 60){
      alert("Maior de 18, pode se cadastrar.");
      return true;
   }
   
   // se for maior que 60 não vai acontecer nada!
   return false;
}
     </script>
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
    <br><br>
<center>
     <h1>Seja um  passeador</h1> <!-- Inicio seção oque precisa -->

</center>
     
        <div class="container ">
      <div class="row ">

 <br><br>  

</div>
 <section>

        <div class="container ">
          <div class="row ">


            <div class="col-md-5 ">
              <img src="img/ft1.jpg"  width="400">
            </div>

            <div class="col-md-6 ">


<br><br>
 <div class="text"><h2> <b>Porque se tornar um passeador?</b> </h2></div>
<div class="text-justify " style="font-size: 20px; "> 
   <div class=""> Você que gosta de cachorros, gosta de exercícios físicos ao ar livre, passear e dar uma vida mais saudável aos dogs. Que tal aproveitar essas habilidades e transformar em uma renda extra nas horas mais flexíveis do seu dia? <br></div></div>
  <br>
  <br>
   <br>
     <br>
    </div>

 </div>
</div>
<br><br>
  <center>
   <div class="text"><h2><b>  Seja bem-vindo à Dog Tour!</b></h2></div>
     </center>
     <br>
     <br>
</section> <!-- fim formulario -->

</center>
  <div class="row borda  shadow-lg p-4 mb-5 bg-white rounded   w-auto p-3">
    <div class= "col-md-4 w-auto p-3 " >


  <img src="img/f2.png"height="80" width="80"><br><br>
  <b>Renda extra</b><br><br>
  <div class="text-justify"> Você é apaixonado por cachorro?
Essa e uma boa oportunidade para transformar sua paixão em ganho extra com os passeios adoráveis e divertidos ao ao livre.
</div>
</div>

<div class= "col-md-4   w-auto p-3 ">
<img src="img/f1.png"height="80" width="80"><br><br>
<b>Ajuda profisional</b><br><br>
  <div class="text-justify">  Você é apaixonado por cachorro?
Essa e uma boa oportunidade para transformar sua paixão em ganho extra com os passeios adoráveis e divertidos ao ao livre.
</div>
</div>
<div class= "col-md-4   w-auto p-3  ">
<img src="img/f2.png"height="80" width="80"><br><br>
<b>Você no controle</b><br><br>
   <div class="text-justify"> Você é apaixonado por cachorro?
Essa e uma boa oportunidade para transformar sua paixão em ganho extra com os passeios adoráveis e divertidos ao ao livre.
</div>
<br>


</div>
</div>
</div>
</div>
<br>
<br>  
<br>
</seletion>
<br>



     <section class="caixa "style= "background: #EBEDEF;"> <!-- Inicio como funciona -->

      <div class=" text-center font2">
        <h1 class="text"><b>Oque você precisa para vira um passeador</b></h1>
      </div>
<br><br>
      <div class="container d-flex espaco">
 
        <div class="row">


         <div class="col-md-3 cor3 shadow-lg p-4 mb-5 rounded text-center font1 efeito1 ">
      
        <h4 class="text3"><b>Perfil</b></h4>
        <p class="">
      1. Ser maior de idade,
      ter dispobilidade de tempo,
      gostar de praticar exercícios físicos,
      ser responsável e pontualidade,
      ter disciplina e foco.

        </p>
      </div>
<br>
       <div class="col-md-3  cor3 shadow-lg p-4 mb-5 ml-4 rounded text-center  font1 efeito1 ">
       <!--  <img src="img/.png" class="img-fluid" width="250"> -->
        <h4 class="text3"><b> Experiência</b></h4>
        <p class="">2. Se você já tem um cachorro e gosta 
          muito dele, tem experiência ou certificado como passeador de cães. 
          Não deixe de se cadastrar se tornar um passeador Dog tour.
        </p>
      </div>

      <div class="col-md-3 shadow-lg p-4  cor3 mb-5 ml-4 rounded text-center font1 efeito1">
       <!-- <img src="img/.png"class="img-fluid" width="250"> -->
        <h4 class="text3"><b>Internet</b></h4>
        <p class="">
           3. Para ser um passeador Dor tour precisa ter   um Smartphone com rede social ativa 
           (WhatsApp e Facebook) e acesso  facil a internet.
        </p>
      </div>

        </div>
      </div>
    
</section> <!-- /fim seção como funciona  -->


    <section class="why-choose-us-area bg-gray section-padding-80-0 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                      <br>
                        <h1> Planos </h1>
                    </div>
                </div>
            </div>

                     <div style="position: relative; float: left;">

            <div class="row">
              <!--   !-- inicio -->
                <div class="col-md-6 col-lg-4">
                    <div class="why-choose-us-content1 text-center mb-80 wow fadeInUp" data-wow-delay="100ms">
                        <div class="">
                            <i class=" aria-hidden=true" ></i>
                        </div>
                            <img class="organizacao" src="img/osso.png" width="80">
                             <p class="" style="font-size: 30px; color: white;"> 
                                <b>Basico</b> </p>
                                    <a style="font-size: 25px; color: #FF6A17;">
                                    <b>GRATIS<br> / mês <br> <br></b></a>
                                     <a style="font-size: 20px; color: white;">

                                    <b>Cadastro + uso da plataforma
                                    </b></a><br><br>

                                   <p  class=" plano1-texto2" href="login.html">Assinar</p></b>
                    </div>
            </div> <!-- fim -->

                
                <!-- inicio -->
                <div class="col-md-6 col-lg-4">
                    <div class="why-choose-us-content1 text-center mb-80 wow fadeInUp" data-wow-delay="100ms">
                        <div class="">
                            <i class=" aria-hidden=true" ></i>
                        </div>
                            <img class="organizacao" src="img/osso.png" width="80">
                             <p class="" style="font-size: 30px; color: white;"> 
                                <b>Gold</b> </p>
                                    <a style="font-size: 25px; color: #FF6A17;">
                                        <b>R$25,00 <br> / mês
                                         <br><br></b></a>
                                     <a style="font-size: 20px; color: white;">
                                      <div class=" ">
                                        <b>  Divulgação nas redes socias<br>
                                         </b></a>
                                         <br>
                                     </div>
                                   <p  class=" plano1-texto2" href="login.html">Assinar</p>
                    </div>
            </div> <!-- fim -->

            <!--     !-- inicio -->
                <div class="col-md-6 col-lg-4">
                    <div class="why-choose-us-content1 text-center mb-80 wow fadeInUp" data-wow-delay="100ms">
                        <div class="">
                            <i class=" aria-hidden=true" ></i>
                        </div>
                            <img class="organizacao" src="img/osso.png" width="80">
                             <p class="" style="font-size: 30px; color: white;"> 
                                <b>Premium</b> </p>
                                    <a style="font-size: 25px; color: #FF6A17;">
                                     <b>$50,00 <br> / mês
                                     <br><br></b></a>
                                     <a style="font-size: 20px; color: white ;">
                                    <b> Divulgação na Platafoma <br>+ redes socias<br>
                                    </a>
                                    <br></b>
             
                               <p  class=" plano1-texto2" href="login.html">Assinar</p>
                               
            </section>

<br><br>

    <br><br> 
    <section class="caixa"style= "background: #EBEDEF;">
    <br><br>   
<div class="ola">
  <br>
  <center> <h1>Cadastre-se para ser passeador</h1></center>
</div>

        <div class="container  shadow-lg p-3 mb-2 bg-white rounded  ">
          <div class="row ">


            <div class="col-md-6 MX-41 ">
              <img src="img/cao.png"  width="350">
            </div>

            <div class="col-md-6 ">


<br> 
 <form name="formpasseador" method="POST" action="controller_passeador.php" onsubmit="return validacao ()">

    <div class="form-group ">
    <label for="exampleFormControlInput1"><b>Nome:</b></label>
    <input type="" class="form-control" name="nome" id="exampleFormControlInput1" placeholder="Nome">
    </div>



<div class="form-group">
    <label for="exampleFormControlInput1 "><b>CPF:</b></label>
   <input type="text" class="form-control" name="cpf" placeholder="CPF" name="cpf" required maxlength="11"
        onkeypress='return event.charCode >= 48 && event.charCode <= 57'  
        onblur="alert(TestaCPF(this.value));">
  </div>

      <div class="form-group ">
    <label for="exampleFormControlInput1"><b>Data de Nascimento:</b></label>
    <input type="" class="form-control" name="nascimento" id="nascimento" placeholder="00/00/0000" onblur ='return validadata()'>
    </div>

      <div class="form-group ">
    <label for="exampleFormControlInput1"><b>Email:</b></label>
    <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="dogtour@exemplo.com"><s></s>
      </div>


      <button  type ="submit" class=" btn btn-outline cor2 text-white"  onclick="cadastro()">Enviar</button>
    <button type="reset" class=" btn btn-outline cor2 text-white">Limpar</button>   

   </div>
 </div>
</div>
</form>
     
</section> <!-- fim formulario -->
           
        <script>
    function cadastro(){
  alert('Entraremos em contato ate 24hrs.');
}
</script>
      
 <!-- <form method="post" action="controller_passeador.php">
    <h2>Cadastre-se</h2>
    <div class="form-group ">
    <label for="exampleFormControlInput1">Nome:</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="nome" placeholder="DogTour"> <!-- o que faz salvar no banco é o - name:"nome" -->
    <!-- </div>

      <div class="form-group ">
    <label for="exampleFormControlInput1">Data de Nascimento:</label>
    <input type="number" class="form-control" id="exampleFormControlInput1" name="data_nascimento" placeholder="00/00/0000">
    </div>

    <div class="form-group">
    <label for="exampleFormControlInput1">Celular:</label>
    <input type="" class="form-control" id="exampleFormControlInput1" name="celular" placeholder="55555555555">
    </div>


      <div class="form-group ">
    <label for="exampleFormControlInput1">Email:</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="dogtour@exemplo.com"><s></s>
      </div>

      <div class="form-group ">
      <label for="exampleFormControlInput1">Senha:</label>
      <input type="password" class="form-control" id="exampleFormControlInput1" name="senha" placeholder="dogtour">
      </div>
   
    <input type="submit"   value="Cadastrar">
   </div>
        </div>
        </div>

</form> --> 

 <?include('rodape.php');?>
    
  </body>
</html>