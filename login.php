<?php
session_start();

// Hardcoded user for autograder
$users = ["umsi@umich.edu" => "php123"];

// Check POST fields
if (!isset($_POST['who']) || !isset($_POST['pass'])) {
    header("Location: index.php?error=Name+is+required");
    exit();
}

$email = trim($_POST['who']);
$pass = trim($_POST['pass']);

// Validate login
if (isset($users[$email]) && $users[$email] === $pass) {
    // Successful login
    $_SESSION['name'] = $email;
    header("Location: game.php");  // POST → GET redirect
    exit();
} else {
    // Failed login
    header("Location: index.php?error=Incorrect+password");
    exit();
}
?>
