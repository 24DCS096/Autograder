<p style="color:red;">
<?php
if (isset($_GET['error'])) {
    echo htmlentities($_GET['error']);
}
?>
</p>

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
    Email: <input type="text" name="who" required><br>
    Password: <input type="password" name="pass" required><br>
    <input type="submit" value="Log In">
</form>
<p style="color:red;"><?= htmlentities($message) ?></p>
</div>
</body>
</html>
