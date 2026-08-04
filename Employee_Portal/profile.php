<?php

// Get employee details from the form

$employee_name = trim($_POST["employee_name"]);

$employee_id = trim($_POST["employee_id"]);

$email = trim($_POST["email"]);

$mobile = trim($_POST["mobile"]);

$department = $_POST["department"];

$designation = trim($_POST["designation"]);

$joining_date = $_POST["joining_date"];

$address = trim($_POST["address"]);


// Create an empty error message

$error_message = "";


// Validate employee name

if (empty($employee_name)) {

    $error_message = "Please enter the employee name.";

}


// Validate employee ID

elseif (empty($employee_id)) {

    $error_message = "Please enter the employee ID.";

}


// Validate email

elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    $error_message = "Please enter a valid email address.";

}


// Validate mobile number

elseif (!preg_match("/^[0-9]{10}$/", $mobile)) {

    $error_message =
        "Please enter a valid 10-digit mobile number.";

}


// Validate department

elseif (empty($department)) {

    $error_message =
        "Please select a department.";

}


// Validate designation

elseif (empty($designation)) {

    $error_message =
        "Please enter the designation.";

}


// Validate joining date

elseif (empty($joining_date)) {

    $error_message =
        "Please select the date of joining.";

}


// Validate address

elseif (empty($address)) {

    $error_message =
        "Please enter the employee address.";

}

?>

<html>

<head>

    <title>Employee Profile</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<?php

// Display error message

if (!empty($error_message)) {

?>

    <h1>Validation Error</h1>

    <p class="error">

        <?php echo $error_message; ?>

    </p>

    <a href="index.php">
        Go Back to Employee Form
    </a>

<?php

}

// Display employee profile

else {

?>

    <h1>Employee Profile</h1>

    <p class="success">
        Employee information submitted successfully!
    </p>


    <div class="profile-card">

        <h2>Employee Information</h2>


        <div class="profile-row">

            <span>Employee Name:</span>

            <strong>
                <?php echo htmlspecialchars($employee_name); ?>
            </strong>

        </div>


        <div class="profile-row">

            <span>Employee ID:</span>

            <strong>
                <?php echo htmlspecialchars($employee_id); ?>
            </strong>

        </div>


        <div class="profile-row">

            <span>Email Address:</span>

            <strong>
                <?php echo htmlspecialchars($email); ?>
            </strong>

        </div>


        <div class="profile-row">

            <span>Mobile Number:</span>

            <strong>
                <?php echo htmlspecialchars($mobile); ?>
            </strong>

        </div>


        <div class="profile-row">

            <span>Department:</span>

            <strong>
                <?php echo htmlspecialchars($department); ?>
            </strong>

        </div>


        <div class="profile-row">

            <span>Designation:</span>

            <strong>
                <?php echo htmlspecialchars($designation); ?>
            </strong>

        </div>


        <div class="profile-row">

            <span>Date of Joining:</span>

            <strong>
                <?php echo htmlspecialchars($joining_date); ?>
            </strong>

        </div>


        <div class="profile-row">

            <span>Address:</span>

            <strong>
                <?php echo htmlspecialchars($address); ?>
            </strong>

        </div>

    </div>


    <a href="index.php">
        Enter Another Employee
    </a>

<?php

}

?>

</div>

</body>

</html>