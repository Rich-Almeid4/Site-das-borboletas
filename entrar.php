<?php
include('conecta .php');
session_start();
    $user = filter_input(INPUT_POST, 'nome');
    $pass = filter_input(INPUT_POST, 'senha');

    $_SESSION['user'] = $_POST['nome'];
    $_SESSION['pass'] = $_POST['senha'];
    
    // Query para verificar o usuário e senha
    $stmt = $conn->prepare('SELECT * FROM usuarios_borboleta WHERE nome_de_usuario = :n AND senha = :s');
    $stmt->bindParam(':n', $user);
    $stmt->bindParam(':s', $pass);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo '<meta http-equiv="refresh" content="2; URL=perfil.php">';

        $_SESSION['nivel'] = 10;
    } 
    
    else {
        echo 'Erro ao entrar!';
    }

?>