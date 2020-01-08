<?php
require_once "config.php";

if (isset($_POST["nome"]) && !empty($_POST["nome"])) {
    $nome = addslashes($_POST["nome"]);
    $email = addslashes($_POST["email"]);

    $sql = "SELECT * FROM usuarios WHERE email = '{$email}'";
    $sql = $pdo->query($sql);
    
    if ($sql->rowCount() > 0) {
        echo "<script>
            alert('Email já está cadastrado.');
            </script>";
    } else {
        $sql = "INSERT INTO usuarios (nome, email, status) VALUE (:nome, :email, 1)";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":email", $email);
        $sql->execute();

        header("Location: index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
</head>

<body class="container"><br>
    <h2 class="text-center">Adicionar</h2><br>
    <a href="index.php" class="btn btn-dark">Voltar página principal</a><br><br>
    <form method="POST">
        <div class="form-group">
            Nome:
            <input type="text" name="nome" class="form-control">
        </div>

        <div class="form-group">
            Email:
            <input type="text" name="email" class="form-control">
        </div>

        <div class="form-group">
            <div class="row">
                <input type="submit" value="Adicionar" class="col-2 m-auto btn btn-primary">
            </div>
        </div>
    </form>
</body>

</html>