<?php
    include '../connecting.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['tel'];
    $celular = $_POST['celular'];
    $dataNascimento = $_POST['dataNascimento'];
    $selectTurma = $_POST['selectTurma'];

    $query = $connect->prepare("INSERT INTO aluno (nome,selectTurma,tel,email,celular,dataNascimento) VALUES 
    ('$nome','$selectTurma','$telefone','$email','$celular', '$dataNascimento')");

    $query->execute();

    header('Location:index.php');
?>