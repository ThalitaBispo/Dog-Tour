
//   function validarSenha(){

//          var senha=  document.getElementById('senha').value;
//          var senha1=  document.getElementById('senha1').value;


//     if(senha == senha1)
//     {
//       alert("senha correta");
//     }
//     else
//     {
//       alert("senha incorreta");
//       header('../telas/cadastrar_entra.html');
//     }
// }

function validacao(){
      if (document.form_login.senha.value == "" || document.form_login.senha.value.length < 6) {
      alert("Preencha o campo senha com no mínimo 6 caracteres!");
      document.form_login.senha.focus();
      return false;
      }
      if (document.form_login.conf_senha.value == "" || document.form_login.conf_senha.value.length < 6) {
        alert("Preencha o campo confirmar senha com no mínimo 6 caracteres!");
        document.form_login.conf_senha.focus();
        return false;
      }
      if(document.form_login.senha.value != document.form_login.conf_senha.value){
        alert('Senhas diferentes');
        document.form_login.senha.focus()
        return false;
      }

      // if ($_SESSION['status_cadastro']){
      //   alert('Cadastrado com Sucesso');

      // }
      // unset($_SESSION['status_cadastro']);
      
      // if($_SESSION['usuario_existe']){
      //   alert('O usuário ou e-mail já existe. Informe outro e tente novamente');
      //   return false;
      // }
      // unset($_SESSION['usuario_existe']);
      
    }
//https://www.hostnet.com.br/info/scripts-para-redirecionamento-de-url/