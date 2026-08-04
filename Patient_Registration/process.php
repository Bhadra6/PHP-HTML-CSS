<?php

// Get patient details from the form

$patient_name = $_POST["patient_name"];

$age = $_POST["age"];

$gender = $_POST["gender"];

$phone = $_POST["phone"];

$email = $_POST["email"];

$address = $_POST["address"];

$problem = $_POST["problem"];

?>

<html>

<head>

    <title>Patient Registration Confirmation</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>Registration Successful!</h1>

    <h2>Patient Confirmation Report</h2>

    <p>
        <b>Patient Name:</b>
        <?php echo $patient_name; ?>
    </p>

    <p>
        <b>Age:</b>
        <?php echo $age; ?>
    </p>

    <p>
        <b>Gender:</b>
        <?php echo $gender; ?>
    </p>

    <p>
        <b>Phone Number:</b>
        <?php echo $phone; ?>
    </p>

    <p>
        <b>Email:</b>
        <?php echo $email; ?>
    </p>

    <p>
        <b>Address:</b>
        <?php echo $address; ?>
    </p>

    <p>
        <b>Reason for Visit:</b>
        <?php echo $problem; ?>
    </p>

    <p class="success">
        Patient registration has been completed successfully.
    </p>

    <a href="index.php">
        Register Another Patient
    </a>

</div>

</body>

</html>