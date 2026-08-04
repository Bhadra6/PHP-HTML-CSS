<?php

// Get customer details from the form

$customer_name = trim($_POST["customer_name"]);

$email = trim($_POST["email"]);

$mobile = trim($_POST["mobile"]);

$gender = $_POST["gender"];

$dob = $_POST["dob"];

$city = $_POST["city"];

$address = trim($_POST["address"]);

$password = $_POST["password"];

$confirm_password = $_POST["confirm_password"];


// Create an empty error message

$error_message = "";


// Validate customer name

if (empty($customer_name)) {

    $error_message =
        "Please enter your customer name.";

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


// Validate gender

elseif (empty($gender)) {

    $error_message =
        "Please select your gender.";

}


// Validate date of birth

elseif (empty($dob)) {

    $error_message =
        "Please select your date of birth.";

}


// Validate city

elseif (empty($city)) {

    $error_message =
        "Please select your city.";

}


// Validate address

elseif (empty($address)) {

    $error_message =
        "Please enter your address.";

}


// Validate password length

elseif (strlen($password) < 8) {

    $error_message =
        "Password must contain at least 8 characters.";

}


// Validate confirm password

elseif ($password !== $confirm_password) {

    $error_message =
        "Password and confirm password do not match.";

}

?>

<html>

<head>

    <title>Customer Registration Result</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<?php

// If there is an error

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

// If all details are valid

else {

?>

    <h1>Registration Successful!</h1>

    <p class="success">
        Customer registered successfully.
    </p>


    <div class="registration-card">

        <h2>Customer Information</h2>


        <div class="detail-row">

            <span>Customer Name:</span>

            <strong>
                <?php
                echo htmlspecialchars(
                    $customer_name
                );
                ?>
            </strong>

        </div>


        <div class="detail-row">

            <span>Email Address:</span>

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

            <span>Gender:</span>

            <strong>
                <?php
                echo htmlspecialchars(
                    $gender
                );
                ?>
            </strong>

        </div>


        <div class="detail-row">

            <span>Date of Birth:</span>

            <strong>
                <?php
                echo htmlspecialchars(
                    $dob
                );
                ?>
            </strong>

        </div>


        <div class="detail-row">

            <span>City:</span>

            <strong>
                <?php
                echo htmlspecialchars(
                    $city
                );
                ?>
            </strong>

        </div>


        <div class="detail-row">

            <span>Address:</span>

            <strong>
                <?php
                echo htmlspecialchars(
                    $address
                );
                ?>
            </strong>

        </div>

    </div>


    <a href="index.php">
        Register Another Customer
    </a>

<?php

}

?>

</div>

</body>

</html>