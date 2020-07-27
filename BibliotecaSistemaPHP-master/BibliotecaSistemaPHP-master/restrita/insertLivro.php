<?php
    include '../connecting.php';

    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editora = $_POST['editora'];
    $paginas = $_POST['paginas'];
    $exemplares = $_POST['exemplares'];
    $selectGenero = $_POST['genero'];

    $query = $connect->prepare("INSERT INTO livros(titulo,autor,editora,paginas,exemplares,genero) 
    VALUES ('$titulo','$autor','$editora','$paginas','$exemplares', '$selectGenero')");

    $query->execute();

    header('Location:index.php');
?>