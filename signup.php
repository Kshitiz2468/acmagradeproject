<?php
// Example hardcoded credentials (replace with DB or file check in real use)
$valid_user = "kshitiz";
$valid_pass = "2468";

// Check form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    if ($username === $valid_user && $password === $valid_pass) {
        echo "<h2>Login Successful! Welcome, $username.</h2>";
    } else {
        echo "<h2>Login Failed. Invalid username or password.</h2>";
        echo "<a href='login.html'>Try Again</a>";
    }
} else {
    echo "Invalid Request.";
}
?>