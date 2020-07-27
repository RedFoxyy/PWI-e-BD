<?php 

    include 'conecta.php';
    $id = 4;

    $consulta = $conexao ->  prepare ("DELETE FROM clientes WHERE id = '$id'");

    $consulta -> execute();

?>