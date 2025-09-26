<?php
session_start();

if (!isset($_POST['name']) || strlen(trim($_POST['name'])) < 1) {
    header("Location: index.php?error=Name+is+required");
    exit();
}

// Save the user name in session
$_SESSION['name'] = $email;
header("Location: game.php");  // Converts POST → GET
exit();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Rock Paper Scissors - ba63c271</title>
</head>
<body>
<!-- This page should never be visible since it redirects -->
</body>
</html>
