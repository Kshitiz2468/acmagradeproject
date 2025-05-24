<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($username && $password) {
        // You should hash passwords in real apps
        $data = $username . '|' . $password . "\n";

        // Save to a file (users.txt must be writable)
        file_put_contents("users.txt", $data, FILE_APPEND);

        echo "<h2>Signup Successful!</h2>";
        echo "<p><a href='login.php'>Click here to login</a></p>";
    } else {
        echo "<h2>Error: All fields are required.</h2>";
    }
} else {
    header("Location: signup.php");
    exit();
}
?>