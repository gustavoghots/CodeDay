<html>
<head>
    <meta charset="UTF-8">
    <title>Página Login Administradores</title>
    <link rel="stylesheet" href="estilosif.css">
</head>
<body>
    <div class="mae">
  <div class="cabecalho">
    <h1>Controle de frotas Conda Hivic</h1>
  </div>
  <div class="login">
    <p>Preencha os campos abaixo:</p>
	<form action="adm_usuario.php" method="POST">
		<label for="nome">Nome</label>
		<input type="text" placeholder="Digite seu nome aqui" name="nome"><br>
		<label for="email">Email</label>
		<input type="text" placeholder ="Digite seu email aqui" name="email"><br>
		<label for="senha">Senha</label>
		<input type="password" placeholder="Digite sua senha aqui" name="senha"><br><br>
    <input type="submit" Value="Login">
	</form>
  </div>
  <div class="rodape">
    <p>Conda Hivic ©, desde 1997</p>
  </div>
    </div>
</body>
</html>
<?php
include_once "CRUD_usuario.php";
$nome  = @$_POST['nome'];
$email = @$_POST['user'];
$senha = @$_POST['senha'];

createUsuario($con,$nome,$senha,$email,3);
?>
