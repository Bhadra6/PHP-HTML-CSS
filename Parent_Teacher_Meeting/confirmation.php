<?php

// Get appointment details from the form

$parent_name = trim($_POST["parent_name"]);

$student_name = trim($_POST["student_name"]);

$student_class = $_POST["student_class"];

$email = trim($_POST["email"]);

$mobile = trim($_POST["mobile"]);

$teacher_name = $_POST["teacher_name"];

$meeting_date = $_POST["meeting_date"];

$time_slot = $_POST["time_slot"];

$purpose = trim($_POST["purpose"]);


// Create an empty error message

$error_message = "";


// Validate parent name

if (empty($parent_name)) {

    $error_message =
        "Please enter the parent name.";

}


// Validate student name

elseif (empty($student_name)) {

    $error_message =
        "Please enter the student name.";

}


// Validate student class

elseif (empty($student_class)) {

    $error_message =
        "Please select the student class.";

}


// Validate email

elseif (!filter_var(
    $email,
    FILTER_VALIDATE_EMAIL
)) {

    $error_message =
        "Please enter a valid email address.";

}


// Validate mobile number

elseif (!preg_match(
    "/^[0-9]{10}$/",
    $mobile
)) {

    $error_message =
        "Please enter a valid 10-digit mobile number.";

}


// Validate teacher name

elseif (empty($teacher_name)) {

    $error_message =
        "Please select a teacher.";

}


// Validate meeting date

elseif (empty($meeting_date)) {

    $error_message =
        "Please select a meeting date.";

}


// Validate time slot

elseif (empty($time_slot)) {

    $error_message =
        "Please select a meeting time slot.";

}


// Validate purpose

elseif (empty($purpose)) {

    $error_message =
        "Please enter the purpose of the meeting.";

}

?>

<html>

<head>

    <title>Appointment Confirmation</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<?php

// Display error message

if (!empty($error_message)) {

?>

    <h1>Registration Error</h1>

    <p class="error">

        <?php echo $error_message; ?>

    </p>

    <a href="index.php">
        Go Back to Registration Form
    </a>

<?php

}

// Display confirmation

else {

?>

    <h1>Appointment Confirmed!</h1>

    <p class="success">
        Parent-Teacher meeting registered successfully.
    </p>


    <div class="confirmation-card">

        <h2>Appointment Details</h2>


        <div class="detail-row">

            <span>Parent Name:</span>

            <strong>
                <?php
                echo htmlspecialchars(
                    $parent_name
                );
                ?>
            </strong>

        </div>


        <div class="detail-row">

            <span>Student Name:</span>

            <strong>
                <?php
                echo htmlspecialchars(
                    $student_name
                );
                ?>
            </strong>

        </div>


        <div class="detail-row">

            <span>Student Class:</span>

            <strong>
                <?php
                echo htmlspecialchars(
                    $student_class
                );
                ?>
            </strong>

        </div>


        <div class="detail-row">

            <span>Parent Email:</span>

            <strong>
                <?php
                echo htmlspecialchars(
                    $email
                );
                ?>
            </strong>

        </div>


        <div class="detail-row">

            <span>Mobile Number:</span>

            <strong>
                <?php
                echo htmlspecialchars(
                    $mobile
                );
                ?>
            </strong>

        </div>


        <div class="detail-row">

            <span>Teacher Name:</span>

            <strong>
                <?php
                echo htmlspecialchars(
                    $teacher_name
                );
                ?>
            </strong>

        </div>


        <div class="detail-row">

            <span>Meeting Date:</span>

            <strong>
                <?php
                echo htmlspecialchars(
                    $meeting_date
                );
                ?>
            </strong>

        </div>


        <div class="detail-row">

            <span>Time Slot:</span>

            <strong>
                <?php
                echo htmlspecialchars(
                    $time_slot
                );
                ?>
            </strong>

        </div>


        <div class="detail-row">

            <span>Purpose:</span>

            <strong>
                <?php
                echo htmlspecialchars(
                    $purpose
                );
                ?>
            </strong>

        </div>

    </div>


    <p class="note">
        Please arrive 5 minutes before your scheduled
        meeting time.
    </p>


    <a href="index.php">
        Book Another Appointment
    </a>

<?php

}

?>

</div>

</body>

</html>