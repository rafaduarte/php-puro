<?php
require "conexao.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = $pdo->prepare("SELECT * FROM usuarios WHERE username = :username AND password = :password");
$sql->bindParam(':username', $username);
$sql->bindParam(':password', $password);
$sql->execute();

$user = $sql->fetch(PDO::FETCH_ASSOC);

if($user) {
    session_start();
    $_SESSION['username'] = $user['username'];
    header("location: index.php");
    exit();
}

?>