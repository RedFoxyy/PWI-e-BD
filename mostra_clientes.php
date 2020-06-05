<?php 

    include 'conecta.php';

    foreach ($conexao -> query($consulta) as $linha) {
        echo $linha ['id'] . "<br>";
        echo $linha ['nome'] . "<br>";
        echo $linha ['idade'] . "<br>";
        echo $linha ['senha'] . "<br>";
        echo $linha ['email'] . "<br>";
        echo "<hr><br>";
    }

    echo "Exibindo a variavel linha";
    echo "<pre>";
    var_dump($linha);
    echo "</pre>;"

?>