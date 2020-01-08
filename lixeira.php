<?php
require_once "config.php";

$sql = "SELECT * FROM usuarios WHERE status = 0";
$sql = $pdo->query($sql);
$rows = array();

if ($sql->rowCount() > 0) {
    $rows = $sql->fetchAll();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lixeira</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
</head>

<body class="container"><br>
    <h2>Lixeira</h2><br>
    <a href="index.php" class="btn btn-dark">Voltar página principal</a><br><br>
    <a href="esvaziar_lixeira.php">Esvaziar Lixeira</a> |
    <a href="restaurar_todos.php">Restaurar todos itens</a>
    <br><br>
    <?php if (!empty($rows)) : ?>
        <table class="table">
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
            <?php foreach ($rows as $value) : ?>
                <tr>
                    <td><?php echo $value["nome"]; ?></td>
                    <td><?php echo $value["email"]; ?></td>
                    <td>
                        <a href="excluir_item_lixeira.php?id=<?php echo $value["id"] ?>" class="btn btn-danger btn-sm">Excluir da lixeira</a>
                        <a href="restaurar_item.php?id=<?php echo $value["id"] ?>" class="btn btn-info btn-sm">Restaurar item</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else : ?>
        <h4 class="text-center">Lixeira está vazia</h4>
    <?php endif; ?>
</body>

</html>