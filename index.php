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
<title>Rock Paper Scissors - ba63c271</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<a href="login.php">Please Log In</a>
<form method="POST" action="login.php">
    Name: <input type="text" name="name" required><br>
    <input type="submit" value="Login">
</form>
<p style="color:red;"><?= htmlentities($message) ?></p>
</div>
</body>
</html>
