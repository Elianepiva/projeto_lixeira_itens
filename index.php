<?php
require_once "config.php";

$sql = "SELECT * FROM usuarios WHERE status = 1";
$sql = $pdo->query($sql);
$rows = array();

if ($sql->rowCount() > 0) {
    $rows = $sql->fetchAll();
}

$sql = "SELECT count(*) as c FROM usuarios WHERE status = 0";
$sql = $pdo->query($sql);

if ($sql->rowCount() > 0) {
    $row = $sql->fetch();
    $qtd = $row["c"];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <title>Home</title>
</head>

<body class="container"><br>
    <a href="adicionar.php" class="btn btn-dark">Adicionar</a><br><br>
    <h2>Lista Usuários</h2><br>
    <?php $qtd = ($qtd == 0) ? $qtd .= " <img src='public/img/lixeira_vazia.png' width='30px'>" : $qtd .= " <img src='public/img/lixeira_cheia.png' width='30px'>"; ?>
    <a href="lixeira.php" class="btn btn-light"><?php echo $qtd; ?><br>Lixeira</a><br><br>
    <table class="table">
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($rows as $value) : ?>
            <tr>
                <td><?php echo $value["nome"] ?></td>
                <td><?php echo $value["email"] ?></td>
                <td><a href="excluir.php?id= <?php echo $value["id"]; ?>" class="btn btn-danger btn-sm">Excluir</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>