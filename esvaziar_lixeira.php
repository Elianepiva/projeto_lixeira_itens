<?php
require_once "config.php";

$sql = "DELETE FROM usuarios WHERE status = 0";
$pdo->query($sql);

header("Location: lixeira.php");
