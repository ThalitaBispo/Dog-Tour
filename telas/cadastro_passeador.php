
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

    <script type="text/javascript" src="js/cpf.js"></script>

    <title>Cadastro Passeador</title>
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
  
<div class="text font-weight-bold text-center" ><h1>Perfil passeador</h1> </div>

 <div class="container col-md-20   ">

   <section class="caixa col-md-15s d-flex border border-primary cor_bloco shadow-lg p-10 mb-10 bg-white rounded"> <!-- Inicio  mb aumenta pra--> 
      <div class="container">
        <div class="row">

           <div class="col-md-4">

           

          </div>

          <div class="col-md-6">
            <div class="align-self-center">

              <?php include_once('../funcional/consulta_passeador.php'); ?>

              <? while($row = $stmt->fetch()) {  ?>

              <form method="POST" action="../funcional/alterarPasseador.php" enctype="multipart/form-data">

                <input type="file" name="imgUsuario">

                <div class="form-group  cor_texto font-weight-bold">
                  <label for="exampleFormControlInput1">Nome:</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome" name="nome" value="<? echo $row['nm_passeador'];?>">
                </div>

                <div class="form-group  cor_texto font-weight-bold">
                  <label for="exampleFormControlInput1 ">Email:</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="dogtour@exemplo" value="<?echo $row['nm_usuario'];?>">
                </div>

                <div class="form-group cor_texto font-weight-bold">
                  <label for="exampleFormControlSelect1">Gênero:</label><br>
                  <input type="text" id="exampleFormControlInput1" placeholder="Gênero" name="genero" value="<?echo $row['nm_genero'];?>">
                </div>

                <div class="form-group  cor_texto font-weight-bold">
                  <label for="exampleFormControlInput1">Tell:</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="(00)00000-0000" name="telefone" value="<?echo $row['cd_telefone_passeador'];?>">
                </div>

                <div class="form-group  cor_texto font-weight-bold">
                  <label for="exampleFormControlInput1">Data de Nascimento:</label>
                  <input type="text" class="form-control" placeholder="00/00/0000" name="nascimento"  id="nascimento" onblur ='return validadata()' value="<?echo date("d/m/Y", strtotime($row['dt_nascimento'])) ?>">
                </div>

                <div class="form-group  cor_texto font-weight-bold">
                  <label for="exampleFormControlInput1 ">RG:</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="000000000" name="rg" value="<?echo $row['cd_rg'];?>">
                </div>

                <div class="form-group  cor_texto font-weight-bold">
                  <label for="exampleFormControlInput1">CPF:</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="00000000000" name="cpf" maxlength="11"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'  
        onblur="alert(TestaCPF(this.value))" value="<?echo $row['cd_cpf'];?>">
                </div>

                <div class="form-group">
                  <label for="exampleFormControlInput1">Endereço:</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="endereco" value="<?echo $row['ds_endereco'];?>">
                </div>

               <div class=" text font-weight-bold"> <h3>Dados Profissionais:</h3></div>

                <div class="form-group  cor_texto font-weight-bold">
                  <label for="exampleFormControlInput1 ">Experiência Profissional:</label> <br>
                  <textarea rows="5" cols="60" name="profissional"><?echo $row['ds_experiencia_profissional'];?></textarea>
                </div>

                <div class="form-group  cor_texto font-weight-bold">
                  <label for="exampleFormControlInput1 ">Perfil:</label> <br>
                  <textarea rows="5" cols="60" name="perfil"><?echo $row['ds_perfil'];?></textarea>
                </div>

                <div class="form-group  cor_texto font-weight-bold ">
                  <label for="exampleFormControlSelect1">Dias de atendimento:</label> <br>
                  <textarea rows="5" cols="60" name="atendimento"><?echo $row['ds_dia_atendimento'];?></textarea>
                </div>

                <div class="form-group  cor_texto font-weight-bold ">
                  <label for="exampleFormControlSelect1">Periodo de Atendimento:</label><br>
                  <textarea rows="5" cols="60" name="periodo"><?echo $row['ds_periodo'];?></textarea>
                </div>

                <div class="form-group  cor_texto font-weight-bold ">
                  <label for="exampleFormControlSelect1">Porte do Cachorro:</label><br>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="porte" value="<?echo $row['ds_porte_cachorro'];?>">
                </div>

                <div class="form-group  cor_texto font-weight-bold ">
                  <label for="exampleFormControlSelect1">Bairro que atende:</label><br>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="porte" value="<?echo $row['nm_bairro_atende'];?>">
                </div>

                <div class="form-group  cor_texto font-weight-bold">
                  <label for="exampleFormControlInput1 ">Valor cobrado:</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="000.000.000-00" name="valor" value="<?echo $row['ds_valor_cobrado'];?>">
                </div>

                <input type="submit" class="btn btn-outline cor2 text-white " value="Salvar">

                <input type="button" name="Voltar" value="Voltar"   class=" btn btn-outline cor2 text-white botaoVoltar" onclick="javascript: location.href='dashboard.php'">

              </form>

              <? } ?>

            </div>
          </div>
        
        </div>
      </div>
    </section> <!-- /fim -->

  </div>
  
</body>
</html>
