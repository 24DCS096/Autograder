<?php
session_start();
if (!isset($_SESSION['name'])) {
    header("Location: index.php");
    exit();
}

$names = ['Rock', 'Paper', 'Scissors'];
$human = isset($_POST['human']) ? intval($_POST['human']) : -1;
$computer = rand(0,2);

function check($computer, $human) {
    if ($human == $computer) return "Tie";
    if (($human + 1) % 3 == $computer) return "You Lose";
    return "You Win";
}

$result = check($computer, $human);
?>
<!DOCTYPE html>
<html>
<head>
<title>RPS Game - ba63c271</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<h1>Rock Paper Scissors</h1>
<p>Welcome: <?= htmlentities($_SESSION['name']) ?></p>

<form method="POST">
<select name="human">
    <option value="-1">Select</option>
    <option value="0">Rock</option>
    <option value="1">Paper</option>
    <option value="2">Scissors</option>
</select>
<input type="submit" value="Play">
<input type="submit" name="logout" value="Logout">
</form>

<pre>
<?php
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit();
}
if ($human == -1) {
    echo "Please select a strategy and press Play.\n";
} else {
    echo "Your Play = $names[$human] Computer Play = $names[$computer] Result = $result\n";
}
?>
</pre>
</div>
</body>
</html>
