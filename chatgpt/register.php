<?php
require 'conexao.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = $pdo->prepare("INSERT INTO usuarios (id, username, password) VALUES (null, :username, :password)");
$sql->bindParam(':username', $username);
$sql->bindParam(':password', $password);

if($sql->execute()) {
    header("location: login_tela.php");
}
?>

