<?php

$name=$_POST["name"];
$regno=$_POST["regno"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$course=$_POST["course"];
$address=$_POST["address"];

?>

<html>

<head>

<title>Admission Acknowledgement</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h1>Admission Acknowledgement</h1>

<h2>Application Submitted Successfully!</h2>

<p><b>Applicant Name:</b> <?php echo $name; ?></p>

<p><b>Register Number:</b> <?php echo $regno; ?></p>

<p><b>Email:</b> <?php echo $email; ?></p>

<p><b>Phone Number:</b> <?php echo $phone; ?></p>

<p><b>Course:</b> <?php echo $course; ?></p>

<p><b>Address:</b> <?php echo $address; ?></p>

<h3>Your admission application has been received successfully.</h3>

<a href="index.php">Back to Application Form</a>

</div>

</body>

</html>