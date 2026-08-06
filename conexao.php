<?php

    // conexao.php

    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "sistema_produtos";
    $conexao = mysqli_connect($host, $usuario, $senha, $banco);

    // if ($conexao){
    //     echo "Conexão realizada com sucesso!";
    // }else{
    //     echo "Erro ao conectar : ". mysqli_conect_error();
    // }
    
?>