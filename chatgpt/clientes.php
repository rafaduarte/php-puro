
<?php
require_once 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];

$stmt = $pdo->prepare("INSERT INTO clientes VALUES(null,:nome,:email)");
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':email', $email);

if($stmt->execute()) {
    echo 'Cliente criado com sucesso!';
    header("location: index.php");
} else {
    echo 'Erro ao criar cliente';
}
?>