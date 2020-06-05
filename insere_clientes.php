<?php 

    include 'conecta.php';

    $nome = "NOME INSERIDO";
    $idade = 26;
    $senha = "gjerv4";
    $email =  "kkdificilmano@gmail.com"

    $consulta = $conexao -> prepare("INSERT INTO clientes (nome, idade, senha) VALUES
        ('$nome', '$idade', '$senha', '$email)");

    $consulta -> execute();    
?>