<?php
session_start();
if (!isset($_POST['name']) || strlen(trim($_POST['name'])) < 1) {
    header("Location: index.php?error=Name+is+required");
    exit();
}
$_SESSION['name'] = trim($_POST['name']);
header("Location: game.php");
exit();
