<?php
require_once "config.php";

$sql = "UPDATE usuarios SET status = 1 WHERE status = 0";
$pdo->query($sql);
header("Location: lixeira.php");
