<?php

// Get customer details

$customer_name = $_POST["customer_name"];

$mobile_number = $_POST["mobile_number"];

$plan = $_POST["plan"];

$call_minutes = $_POST["call_minutes"];

$data_used = $_POST["data_used"];

$sms_used = $_POST["sms_used"];


// User-defined function to get plan price

function getPlanPrice($plan)
{

    if ($plan == "Basic") {

        return 199;

    }
    elseif ($plan == "Standard") {

        return 399;

    }
    else {

        return 599;

    }

}


// User-defined function to calculate call charges

function calculateCallCharge($call_minutes)
{

    if ($call_minutes <= 100) {

        return 0;

    }
    else {

        $extra_minutes = $call_minutes - 100;

        return $extra_minutes * 1;

    }

}


// User-defined function to calculate data charges

function calculateDataCharge($data_used)
{

    if ($data_used <= 2) {

        return 0;

    }
    else {

        $extra_data = $data_used - 2;

        return $extra_data * 50;

    }

}


// User-defined function to calculate SMS charges

function calculateSMSCharge($sms_used)
{

    if ($sms_used <= 100) {

        return 0;

    }
    else {

        $extra_sms = $sms_used - 100;

        return $extra_sms * 0.50;

    }

}


// Call the functions

$plan_price = getPlanPrice($plan);

$call_charge = calculateCallCharge($call_minutes);

$data_charge = calculateDataCharge($data_used);

$sms_charge = calculateSMSCharge($sms_used);


// Calculate total bill

$total_bill = $plan_price
            + $call_charge
            + $data_charge
            + $sms_charge;

?>

<html>

<head>

    <title>Mobile Bill Summary</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>Mobile Bill Summary</h1>

    <h2>Bill Generated Successfully!</h2>


    <div class="bill-details">

        <h3>Customer Details</h3>

        <p>
            <b>Customer Name:</b>
            <?php echo $customer_name; ?>
        </p>

        <p>
            <b>Mobile Number:</b>
            <?php echo $mobile_number; ?>
        </p>


        <h3>Usage Details</h3>

        <p>
            <b>Tariff Plan:</b>
            <?php echo $plan; ?>
        </p>

        <p>
            <b>Call Minutes Used:</b>
            <?php echo $call_minutes; ?> minutes
        </p>

        <p>
            <b>Data Used:</b>
            <?php echo $data_used; ?> GB
        </p>

        <p>
            <b>SMS Used:</b>
            <?php echo $sms_used; ?>
        </p>


        <h3>Bill Details</h3>

        <p>
            <b>Plan Charge:</b>
            ₹<?php echo number_format($plan_price, 2); ?>
        </p>

        <p>
            <b>Extra Call Charge:</b>
            ₹<?php echo number_format($call_charge, 2); ?>
        </p>

        <p>
            <b>Extra Data Charge:</b>
            ₹<?php echo number_format($data_charge, 2); ?>
        </p>

        <p>
            <b>Extra SMS Charge:</b>
            ₹<?php echo number_format($sms_charge, 2); ?>
        </p>

        <hr>

        <h2>
            Total Bill Amount:
            ₹<?php echo number_format($total_bill, 2); ?>
        </h2>

    </div>


    <a href="index.php">
        Generate Another Bill
    </a>

</div>

</body>

</html>