<?php
// Define the file where the feedback will be logged
$logFile = "feedback_log.txt";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect feedback data from the form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];

    // Prepare the feedback data to be logged
    $logData = "Name: $name\nEmail: $email\nFeedback: $feedback\n---\n";

    // Write the feedback data to the log file
    file_put_contents($logFile, $logData, FILE_APPEND);

    // Provide a message to the user after feedback is submitted
    echo "Thank you for your feedback!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
</head>
<body>
    <h1>Feedback Form</h1>
    <form method="POST" action="feedback_form.php">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="feedback">Feedback:</label><br>
        <textarea name="feedback" id="feedback" rows="4" cols="50" required></textarea><br><br>

        <button type="submit">Submit Feedback</button>
    </form>
</body>
</html>
