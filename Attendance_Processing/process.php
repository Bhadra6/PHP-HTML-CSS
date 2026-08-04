<?php

// Get values from the form

$student_name = trim($_POST["student_name"]);

$register_number = trim($_POST["register_number"]);

$total_classes = $_POST["total_classes"];

$attended_classes = $_POST["attended_classes"];


// Check if attended classes are valid

if ($attended_classes > $total_classes) {

    $error_message =
        "Attended classes cannot be greater than total classes.";

}


// User-defined function to calculate attendance percentage

function calculateAttendance($attended, $total)
{

    $percentage = ($attended / $total) * 100;

    return $percentage;

}


// User-defined function to determine eligibility

function checkEligibility($percentage)
{

    if ($percentage >= 75) {

        return "Eligible for Examination";

    }
    else {

        return "Not Eligible for Examination";

    }

}


// Calculate attendance only if there is no error

if (!isset($error_message)) {

    $attendance_percentage =
        calculateAttendance(
            $attended_classes,
            $total_classes
        );


    $eligibility =
        checkEligibility(
            $attendance_percentage
        );

}

?>

<html>

<head>

    <title>Attendance Result</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<?php

if (isset($error_message)) {

?>

    <h1>Invalid Input</h1>

    <p class="error">

        <?php echo $error_message; ?>

    </p>

    <a href="index.php">
        Go Back
    </a>

<?php

}

else {

?>

    <h1>Attendance Result</h1>


    <div class="result-box">

        <h2>Attendance Details</h2>


        <p>
            <b>Student Name:</b>
            <?php echo htmlspecialchars($student_name); ?>
        </p>


        <p>
            <b>Register Number:</b>
            <?php echo htmlspecialchars($register_number); ?>
        </p>


        <p>
            <b>Total Classes:</b>
            <?php echo $total_classes; ?>
        </p>


        <p>
            <b>Classes Attended:</b>
            <?php echo $attended_classes; ?>
        </p>


        <p>
            <b>Attendance Percentage:</b>
            <?php echo number_format(
                $attendance_percentage,
                2
            ); ?>%
        </p>


        <p>
            <b>Examination Eligibility:</b>
            <?php echo $eligibility; ?>
        </p>

    </div>


    <?php

    if ($attendance_percentage >= 75) {

    ?>

        <p class="eligible">
            Congratulations! You are eligible to appear
            for the examination.
        </p>

    <?php

    }
    else {

    ?>

        <p class="not-eligible">
            Your attendance is below 75%.
            You are not eligible to appear for the examination.
        </p>

    <?php

    }

    ?>


    <a href="index.php">
        Check Another Student
    </a>

<?php

}

?>

</div>

</body>

</html>