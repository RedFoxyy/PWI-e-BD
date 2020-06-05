<?php 

    include 'conecta.php';
    $id = 4;
    $nome_novo = "NOME INSERIDO ATUALIZADO";

    $consulta = $conexao -> prepapre("UPDATE clientes SET nome = 'nome_novo' WHERE
        id = '$id'");
    $consulta ->  executa();

?>