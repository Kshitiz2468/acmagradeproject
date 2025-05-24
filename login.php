<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $user_type = $_POST['user_type'];

    if ($username && $password && $user_type) {
        $data = $username . "|" . $password . "|" . $user_type . "\n";
        file_put_contents("users.txt", $data, FILE_APPEND);
        
        echo "<h2>Signup Successful as $user_type!</h2>";
        echo "<p><a href='login.php'>Go to Login</a></p>";
    } else {
        echo "Please fill all fields.";
    }
} else {
    echo "Invalid request.";
}
?>