<?php

// Get details from the form

$student_name = $_POST["student_name"];

$register_number = $_POST["register_number"];

$email = $_POST["email"];

$phone = $_POST["phone"];

$course = $_POST["course"];

$mode = $_POST["mode"];

?>

<html>

<head>

    <title>Registration Details</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>Registration Successful!</h1>

    <h2>Course Registration Details</h2>

    <p>
        <b>Student Name:</b>
        <?php echo $student_name; ?>
    </p>

    <p>
        <b>Register Number:</b>
        <?php echo $register_number; ?>
    </p>

    <p>
        <b>Email:</b>
        <?php echo $email; ?>
    </p>

    <p>
        <b>Phone Number:</b>
        <?php echo $phone; ?>
    </p>

    <p>
        <b>Selected Course:</b>
        <?php echo $course; ?>
    </p>

    <p>
        <b>Study Mode:</b>
        <?php echo $mode; ?>
    </p>

    <p class="success">
        Your course registration has been completed successfully.
    </p>

    <a href="index.php">
        Register for Another Course
    </a>

</div>

</body>

</html>