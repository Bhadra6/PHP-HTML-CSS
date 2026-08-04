<?php

// Get values from the form

$email = $_POST["email"];

$password = $_POST["password"];

$mobile = $_POST["mobile"];


// Validate Email

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

    $email_message = "Valid Email ID";

}
else {

    $email_message = "Invalid Email ID";

}


// Validate Password

if (strlen($password) >= 8) {

    $password_message = "Valid Password";

}
else {

    $password_message = "Invalid Password. Password must contain at least 8 characters.";

}


// Validate Mobile Number

if (preg_match("/^[0-9]{10}$/", $mobile)) {

    $mobile_message = "Valid Mobile Number";

}
else {

    $mobile_message = "Invalid Mobile Number. Please enter exactly 10 digits.";

}

?>

<html>

<head>

    <title>Validation Result</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>Validation Result</h1>


    <p>
        <b>Email ID:</b>
        <?php echo $email; ?>
    </p>

    <p class="message">
        <?php echo $email_message; ?>
    </p>


    <hr>


    <p>
        <b>Password:</b>
        ********
    </p>

    <p class="message">
        <?php echo $password_message; ?>
    </p>


    <hr>


    <p>
        <b>Mobile Number:</b>
        <?php echo $mobile; ?>
    </p>

    <p class="message">
        <?php echo $mobile_message; ?>
    </p>


    <br>

    <a href="index.php">
        Validate Again
    </a>

</div>

</body>

</html>