<?php

// Get the data sent from the form
$name = $_POST["name"];
$register_number = $_POST["register_number"];
$email = $_POST["email"];
$course = $_POST["course"];
$department = $_POST["department"];
$year = $_POST["year"];

?>

<!DOCTYPE html>
<html>
<head>

    <title>Student Details</title>

    <!-- Connect External CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="container">

        <h1>Student Details</h1>

        <h2>Details Submitted Successfully!</h2>

        <p><b>Student Name:</b> <?php echo $name; ?></p>

        <p><b>Register Number:</b> <?php echo $register_number; ?></p>

        <p><b>Email:</b> <?php echo $email; ?></p>

        <p><b>Course:</b> <?php echo $course; ?></p>

        <p><b>Department:</b> <?php echo $department; ?></p>

        <p><b>Year:</b> <?php echo $year; ?></p>

        <br>

        <a href="index.php">Go Back</a>

    </div>

</body>
</html>