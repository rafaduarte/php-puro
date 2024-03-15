<?php
require 'conexao.php';

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');

if($id && $nome && $email) {
    $sql = $pdo->prepare("UPDATE clientes SET nome = :nome, email = :email WHERE id = :id");
    $sql->bindParam(':nome', $nome);
    $sql->bindParam(':email', $email);
    $sql->bindParam(':id', $id);

    $sql->execute();
    header("location: index.php");
    exit;
}
?>;