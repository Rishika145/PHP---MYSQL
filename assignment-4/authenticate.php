<?php
session_start();
$conn = new mysqli("localhost", "root", "", "user_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = md5($_POST['password']); // Using MD5 for simplicity (use bcrypt in real applications)

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['username'] = $username;
    header("Location: welcome.php");
} else {
    echo "Invalid credentials. <a href='login.php'>Try again</a>";
}

$conn->close();
?>