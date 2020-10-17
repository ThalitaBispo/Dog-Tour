<?

     if (!empty($_POST)) {

    include_once('conexao.php'); 

    $codigo = $_GET['cod'];

    $stmt = $conexao->prepare("select * from tb_agendamento join tb_cliente on tb_agendamento.cd_cliente = tb_cliente.cd_cliente where cd_agendamento = '$codigo' ");
    $stmt->execute();

  }

  ?>