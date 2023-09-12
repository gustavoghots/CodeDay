<?php
    include_once 'conexão.php';

    function readUsuario(){
        $dados = mysqli_query($con,"select * from dados_usuario where nome is not null "/*adicionar filtros com if*/);
        $dados = mysqli_fetch_assoc($dados);
        return $dados;
    }

    function createUsuario($nome,$senha,$email,$tipo){
        mysqli_query($con,"insert into usuario(nome, senha, email, tipo) 
                            values('".$nome."','".$senha."','".$email."',".$tipo.")");
    }

    function deleteUsuario($id){
        mysqli_query($con,"delete from usuario where idUsuario=".$id);
    }

    function updateUsuario($id,$nome,$senha,$email,$tipo){
        mysqli_query($con,"update usuario set nome='".$nome."' senha='".$senha."' email='".$email."' tipo=".$tipo." where idUsuario=".$id);
    }
?>