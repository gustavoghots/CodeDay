<?php
    include_once 'conexão.php';

    function readVeiculo($con){
        $dados = mysqli_query($con,"select * from dados_veiculo"/*adicionar filtros com if*/);
        mysqli_fetch_assoc($dados);
        return $dados;
    }

    function createVeiculo($con,$placa,$manutencao){
        mysqli_query($con,"insert into veiculo(placa, manutencao) 
                            values('".$placa."','".$manutencao."'");
    }

    function deleteVeiculo($con,$placa){
        mysqli_query($con,"delete from veiculo where idVeiculo>0 and placa='".$placa."'");
    }

    function updateVeiculo($con,$placa,$manutencao){
        mysqli_query($con,"update veiculo set manutencao='".$manutencao."' where placa='".$placa."'");
    }
?>