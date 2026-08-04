<?php

// Get employee name from the form
$employee_name = $_POST["employee_name"];

// Convert the name to lowercase
$employee_name = strtolower($employee_name);

// Remove spaces from the name
$employee_name = str_replace(" ", "", $employee_name);

// Generate email ID
$email = $employee_name . "@company.com";

?>

<html>

<head>

    <title>Employee Email ID</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>Employee Email ID Generator</h1>

    <h2>Email ID Generated Successfully!</h2>

    <p>
        <b>Employee Name:</b>
        <?php echo $_POST["employee_name"]; ?>
    </p>

    <p>
        <b>Employee Email ID:</b>
        <?php echo $email; ?>
    </p>

    <br>

    <a href="index.php">Generate Another Email ID</a>

</div>

</body>

</html>