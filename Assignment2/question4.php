<?php
// Check if the form was submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted form data
    $name = htmlspecialchars($_POST['name']);
    $mobile = htmlspecialchars($_POST['mobile']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
} else {
    // Redirect if the form was not submitted correctly
    echo "invalid form submission.";
    exit;
}
?>

