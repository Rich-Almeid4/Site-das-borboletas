<?php


include ('conecta .php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];


$teste = $conn->prepare('INSERT INTO usuarios_borboleta (nome_de_usuario, email, senha) VALUES (:n, :m, :s)');
$teste->bindValue(":n","$nome");
$teste->bindValue(":m","$email");
$teste->bindValue(":s","$senha");
$teste->execute();


if ($teste) {
    echo "deu bom";
} else {
    echo "deu ruim";
}


?>