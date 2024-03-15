<?php
 require 'conexao.php';

 $cliente = [];
 $id = filter_input(INPUT_GET, 'id');
 if($id) {
    $sql = $pdo->prepare("SELECT * FROM clientes WHERE id = :id");
    $sql->bindParam(':id', $id);
    $sql->execute();

    if($sql->rowCount() > 0) {
        $cliente = $sql->fetch(PDO::FETCH_ASSOC);
    }
 }
?>

<h1>Editar Usuário</h1>
<form method="POST" action="editar_action.php">
    <input type="hidden" name="id" value="<?=$cliente['id']; ?>"/>>
    <label>
        Nome: <input type="text" name="nome" value="<?=$cliente['nome']; ?>"/>
    </label>
    <label>
        Email: <input type="text" name="email" value="<?=$cliente['email']; ?>"/>
    </label>
    <input type="submit" value="Atualizar">
</form>