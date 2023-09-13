<?php
    include_once 'conexão.php';

    function readUsuario($con){
        $dados = mysqli_query($con,"select * from dados_usuario"/*adicionar filtros com if*/);
        mysqli_fetch_assoc($dados);
        return $dados;
    }

    function createUsuario($con,$nome,$senha,$email,$tipo){
        mysqli_query($con,"insert into usuario(nome, senha, email, tipo) 
                            values('".$nome."','".$senha."','".$email."',".$tipo.")");
    }

    function deleteUsuario($con,$nome){
        mysqli_query($con,"delete from usuario where idUsuario>0 and nome='".$nome."'");
    }

    function updateUsuario($con,$nome,$senha,$email,$tipo){
        mysqli_query($con,"update usuario set senha='".$senha."', Email='".$email."', tipo=".$tipo." where nome='".$nome."'");
    }
?>