<?php
session_start();
if (isset($_SESSION['name'])) {
    header("Location: game.php");
    exit();
}
$message = $_GET['error'] ?? '';
?>
<!DOCTYPE html>
<html>
<head>
<title>RPS Login - ba63c271</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<h2>Login to Play Rock Paper Scissors</h2>
<form method="POST" action="login.php">
    Name: <input type="text" name="name" required><br>
    <input type="submit" value="Login">
</form>
<p style="color:red;"><?= htmlentities($message) ?></p>
</div>
</body>
</html>
