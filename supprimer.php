<?php
include 'config.php';
$conn->prepare("DELETE FROM taches WHERE id = ?")->execute([$_GET['id']]);
header('Location: index.php');
?>