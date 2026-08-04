<?php

// Get username and password from the form

$username = $_POST["username"];

$password = $_POST["password"];


// Sample login credentials

$correct_username = "bhadra";

$correct_password = "12345";


// Check login details

if ($username == $correct_username && $password == $correct_password) {

    // Login successful

    header("Location: dashboard.php");

    exit();

}
else {

    // Login failed

    $error_message = "Invalid username or password.";

}

?>

<html>

<head>

    <title>Login Failed</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="login-container">

    <h1>Login Failed</h1>

    <p class="error">
        <?php echo $error_message; ?>
    </p>

    <a href="index.php">
        Try Again
    </a>

</div>

</body>

</html>