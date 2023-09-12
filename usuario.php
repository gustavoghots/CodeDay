<?php
    include_once 'conexão.php';
    class usuario{
        private $nome;
        private $senha;
        private $tipo;

        function getNome($nome){
            mysqli_query($con,"select nome from usuario where nome=".$nome."limit 1");
        }
        function setNome($nome){
            mysqli_query($con,"insert into");
        }
    }
?>