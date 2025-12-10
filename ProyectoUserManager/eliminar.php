<?php
include "bdd.php";
$id = $_GET["id"];
$stmt = $pdo->prepare("DELETE FROM usuarios WHERE id=?");
$stmt->execute([$id]);
header("Location: lista.php");
exit;
?>
