<?php

$username = "root";

try {
  $conn = new PDO('mysql:host=localhost;dbname=borboleta', $username);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo 'conectado';

} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?>