<?php

// Get student details
$name = $_POST["name"];
$register_number = $_POST["register_number"];

// Get marks
$english = $_POST["english"];
$computer = $_POST["computer"];
$maths = $_POST["maths"];
$data_science = $_POST["data_science"];
$php = $_POST["php"];

// Function to calculate total marks
function calculateTotal($english, $computer, $maths, $data_science, $php)
{
    return $english + $computer + $maths + $data_science + $php;
}

// Function to calculate average
function calculateAverage($total)
{
    return $total / 5;
}

// Function to determine grade
function calculateGrade($average)
{
    if ($average >= 90) {
        return "A+";
    }
    elseif ($average >= 80) {
        return "A";
    }
    elseif ($average >= 70) {
        return "B";
    }
    elseif ($average >= 60) {
        return "C";
    }
    elseif ($average >= 50) {
        return "D";
    }
    else {
        return "F";
    }
}

// Call the functions
$total = calculateTotal(
    $english,
    $computer,
    $maths,
    $data_science,
    $php
);

$average = calculateAverage($total);

$grade = calculateGrade($average);

?>

<html>

<head>

    <title>Student Result</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>Student Result</h1>

    <h2>Result Generated Successfully!</h2>

    <p><b>Student Name:</b> <?php echo $name; ?></p>

    <p><b>Register Number:</b> <?php echo $register_number; ?></p>

    <hr>

    <p><b>English:</b> <?php echo $english; ?></p>

    <p><b>Computer Science:</b> <?php echo $computer; ?></p>

    <p><b>Mathematics:</b> <?php echo $maths; ?></p>

    <p><b>Data Science:</b> <?php echo $data_science; ?></p>

    <p><b>PHP:</b> <?php echo $php; ?></p>

    <hr>

    <p><b>Total Marks:</b> <?php echo $total; ?> / 500</p>

    <p><b>Average Marks:</b> <?php echo number_format($average, 2); ?>%</p>

    <p><b>Grade:</b> <?php echo $grade; ?></p>

    <br>

    <a href="index.php">Calculate Another Result</a>

</div>

</body>

</html>