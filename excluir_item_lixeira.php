<?php
require_once "config.php";

if (!empty($_GET["id"])) {
    $id = intval($_GET["id"]);
    $sql = "DELETE FROM usuarios WHERE id = :id";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":id", $id);
    $sql->execute();
}
header("Location:lixeira.php");
