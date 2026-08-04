<?php

// Get customer details

$customer_name = $_POST["customer_name"];

$email = $_POST["email"];

$mobile = $_POST["mobile"];

$package = $_POST["package"];

$persons = $_POST["persons"];

$travel_date = $_POST["travel_date"];

$requirements = $_POST["requirements"];


// Set package price

if ($package == "Kerala Trip") {

    $price = 10000;

}
elseif ($package == "Goa Trip") {

    $price = 12000;

}
elseif ($package == "Manali Trip") {

    $price = 15000;

}
else {

    $price = 0;

}


// Calculate total price

$total_price = $price * $persons;

?>

<html>

<head>

    <title>Booking Confirmation</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>Booking Confirmation</h1>

    <h2>Booking Successful!</h2>

    <p class="success">
        Thank you for booking with us.
        Your travel package has been successfully booked.
    </p>


    <div class="booking-details">

        <h3>Customer Details</h3>

        <p>
            <b>Customer Name:</b>
            <?php echo htmlspecialchars($customer_name); ?>
        </p>

        <p>
            <b>Email:</b>
            <?php echo htmlspecialchars($email); ?>
        </p>

        <p>
            <b>Mobile Number:</b>
            <?php echo htmlspecialchars($mobile); ?>
        </p>


        <h3>Travel Details</h3>

        <p>
            <b>Selected Package:</b>
            <?php echo htmlspecialchars($package); ?>
        </p>

        <p>
            <b>Number of Persons:</b>
            <?php echo $persons; ?>
        </p>

        <p>
            <b>Travel Date:</b>
            <?php echo $travel_date; ?>
        </p>

        <p>
            <b>Package Price Per Person:</b>
            ₹<?php echo number_format($price, 2); ?>
        </p>

        <p>
            <b>Total Booking Amount:</b>
            ₹<?php echo number_format($total_price, 2); ?>
        </p>


        <h3>Special Requirements</h3>

        <p>
            <?php

            if (!empty($requirements)) {

                echo htmlspecialchars($requirements);

            }
            else {

                echo "No special requirements.";

            }

            ?>
        </p>

    </div>


    <a href="index.php">
        Make Another Booking
    </a>

</div>

</body>

</html>