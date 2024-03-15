<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>CRUD PHP com PDO</title>
</head>

<body>
    <?php
    require 'conexao.php';
    $clientes = [];
    $sql = $pdo->query("SELECT * FROM clientes");
    if($sql->rowCount() > 0){
        $clientes = $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    ?>
    <h1>Sistema CRUD</h1>    
  
    <form action="clientes.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <br>
        <button type="submit">Criar Cliente</button>
    </form>

    <h1>Listagem de Clientes</h1>
    <table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ações</th>
    </tr>
    <?php foreach($clientes as $cliente): ?>
    <tr>
        <td><?=$cliente['id'];?></td>
        <td><?=$cliente['nome'];?></td>
        <td><?=$cliente['email'];?></td>
        <td>
            <a href="editar.php?id=<?=$cliente['id']; ?>">[ Editar ]</a>
            <a href="excluir.php?id=<?=$cliente['id']; ?>">[ Excluir ]</a>
        </td>
    </tr>
    <?php endforeach ?>
    </table>
</body>

</html>