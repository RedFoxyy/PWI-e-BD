<?php 

    session_start();

    if (
        (!isset($_SESSION['id'])== true)&&
        (!isset($_SESSION['nome'])== true)&&
        (!isset($_SESSION[email])== true)) {
            unset($_SESSION['id']);
            unset($_SESSION['nome']);
            unset($_SESSION['email']);
            header('Location: index.html');
    }

    echo "PAGINA RESTRITA";

?>

<a href="logout.php">SAIR</a>

