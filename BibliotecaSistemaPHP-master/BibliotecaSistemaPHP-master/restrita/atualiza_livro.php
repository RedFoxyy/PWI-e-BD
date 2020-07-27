<?php 

include '../connecting.php';

$codLivro = $_GET['codLivro'];

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];
$paginas = $_POST['paginas'];
$exemplares = $_POST['exemplares'];

$consulta = $connect -> prepare("
UPDATE livros SET
titulo='$titulo',
autor='$autor',
editora='$editora',
paginas='$paginas',
exemplares='$exemplares'

WHERE codLivro = '$codLivro'");

$consulta -> execute();

header('Location: index.php');

?>