<?php
include('conecta .php');

    $user = filter_input(INPUT_POST, 'nome');
    $pass = filter_input(INPUT_POST, 'senha');

    // Query para verificar o usuário e senha
    $stmt = $conn->prepare('SELECT * FROM usuarios_borboleta WHERE nome_de_usuario = :n AND senha = :s');
    $stmt->bindParam(':n', $user);
    $stmt->bindParam(':s', $pass);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo '<meta http-equiv="refresh" content="2; URL=index.html">';
    } else {
        echo 'Erro ao entrar';
    }

?>