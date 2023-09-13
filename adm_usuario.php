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
            <label>Nome</label><br>
            <input type="text" name="nome" id="nome" value="" required><br><br>
            <label>Senha</label><br>
            <input type="text" name="senha" id="senha" value="" required><br><br>
            <label>E-mail</label><br>
            <input type="text" name="email" id="email" value="" required><br><br>
            <label>Tipo</label><br>
            <input type="number" name="tipo" id="tipo" value="" required min="1" max="3"><br><br>
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
    include_once 'CRUD_usuario.php';
    if(isset($_POST['insert'])){
        createUsuario($con,$_POST['nome'],$_POST['senha'],$_POST['email'],$_POST['tipo']);
    }
    if(isset($_POST['delete'])){
        deleteUsuario($con,$_POST['nome']);
    }
    if(isset($_POST['update'])){
        updateUsuario($con,$_POST['nome'],$_POST['senha'],$_POST['email'],$_POST['tipo']);
    }
    $usuarios=readUsuario($con);
    foreach ($usuarios as $usuario){
        echo $usuario['nome']." - ".$usuario['email']." - ".$usuario['tipo']."<br><br>";
    }
?>
