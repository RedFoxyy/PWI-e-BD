<?php 

include '../connecting.php';

$ra = $_GET['ra'];

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['tel'];
$celular = $_POST['celular'];
$dataNascimento = $_POST['dataNascimento'];

$consulta = $connect -> prepare("
UPDATE aluno SET
nome='$nome',
email='$email',
tel='$telefone',
celular='$celular',
dataNascimento='$dataNascimento'

WHERE ra = '$ra'");

$consulta -> execute();

header('Location: index.php');

?>