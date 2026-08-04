<?php

// Get details from the form

$member_name = trim($_POST["member_name"]);

$email = trim($_POST["email"]);

$mobile = trim($_POST["mobile"]);

$dob = $_POST["dob"];

$gender = $_POST["gender"];

$address = trim($_POST["address"]);

$membership_type = $_POST["membership_type"];


// Create an empty error message

$error_message = "";


// Validate member name

if (empty($member_name)) {

    $error_message = "Please enter the member name.";

}


// Validate email

elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    $error_message = "Please enter a valid email address.";

}


// Validate mobile number

elseif (!preg_match("/^[0-9]{10}$/", $mobile)) {

    $error_message = "Please enter a valid 10-digit mobile number.";

}


// Validate date of birth

elseif (empty($dob)) {

    $error_message = "Please select your date of birth.";

}


// Validate gender

elseif (empty($gender)) {

    $error_message = "Please select your gender.";

}


// Validate address

elseif (empty($address)) {

    $error_message = "Please enter your address.";

}


// Validate membership type

elseif (empty($membership_type)) {

    $error_message = "Please select a membership type.";

}


// Generate membership information if no error

if (empty($error_message)) {

    // Generate a random membership ID

    $membership_id = "LIB" . rand(1000, 9999);

    $registration_date = date("d-m-Y");

}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Library Membership Result</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<?php

if (!empty($error_message)) {

?>

    <h1>Registration Failed</h1>

    <p class="error">

        <?php echo $error_message; ?>

    </p>

    <a href="index.php">
        Go Back to Registration
    </a>

<?php

}

else {

?>

    <h1>Registration Successful!</h1>

    <p class="success">
        Congratulations! Your library membership has been created successfully.
    </p>


    <div class="membership-card">

        <h2>Library Membership Information</h2>


        <p>
            <b>Membership ID:</b>
            <?php echo $membership_id; ?>
        </p>

        <p>
            <b>Member Name:</b>
            <?php echo htmlspecialchars($member_name); ?>
        </p>

        <p>
            <b>Email:</b>
            <?php echo htmlspecialchars($email); ?>
        </p>

        <p>
            <b>Mobile Number:</b>
            <?php echo htmlspecialchars($mobile); ?>
        </p>

        <p>
            <b>Date of Birth:</b>
            <?php echo htmlspecialchars($dob); ?>
        </p>

        <p>
            <b>Gender:</b>
            <?php echo htmlspecialchars($gender); ?>
        </p>

        <p>
            <b>Address:</b>
            <?php echo htmlspecialchars($address); ?>
        </p>

        <p>
            <b>Membership Type:</b>
            <?php echo htmlspecialchars($membership_type); ?>
        </p>

        <p>
            <b>Registration Date:</b>
            <?php echo $registration_date; ?>
        </p>

    </div>


    <a href="index.php">
        Register Another Member
    </a>

<?php

}

?>

</div>

</body>

</html>