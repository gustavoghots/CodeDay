<html>
    <body>
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
    </body>
</html>
<?php
    include_once 'CRUD_usuario.php';
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