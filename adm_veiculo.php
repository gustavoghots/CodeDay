<html>
<head>
    <meta charset="UTF-8">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="estilosif.css">
</head>
<body>
    <div class="mae">
  <div class="cabecalho">
    <h1>Controle de frotas Conda Hivic</h1>
  </div>
  <div class="login">
  <form action="" method="post">
            <label>Placa</label><br>
            <input type="text" name="placa" id="placa" value="" required><br><br>
            <label>Manutenção</label><br>
            <input type="date" name="manutencao" id="manutencao" value="" required><br><br>
            <input type="submit" name="insert" value="Cadastrar">
            <input type="submit" name="select" value="Pesquisar"><br>
            <input type="submit" name="update" value="Atualizar">
            <input type="submit" name="delete" value="Excluir">
  </form>
  </div>
  <div class="rodape">
  <p>Conda Hivic ©, desde 1997</p>  
  </div>
    </div>
</body>
</html>
<?php
    include_once 'CRUD_veiculo.php';
    if(isset($_POST['insert'])){
        createVeiculo($con,$_POST['placa'],$_POST['manutencao']);
    }
    if(isset($_POST['delete'])){
        deleteVeiculo($con,$_POST['placa']);
    }
    if(isset($_POST['update'])){
        updateVeiculo($con,$_POST['placa'],$_POST['manutencao']);
    }
    $usuarios=readVeiculo($con);
    foreach ($usuarios as $usuario){
        echo $usuario['placa']." - ".$usuario['manutencao']."<br><br>";
    }
?>



