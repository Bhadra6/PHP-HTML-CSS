<?php

// Get values from the form

$customer_name = trim($_POST["customer_name"]);

$age = $_POST["age"];

$policy_term = $_POST["policy_term"];

$coverage_amount = $_POST["coverage_amount"];


// Function to determine age rate

function getAgeRate($age)
{

    if ($age >= 18 && $age <= 30) {

        return 0.01;

    }
    elseif ($age >= 31 && $age <= 45) {

        return 0.015;

    }
    elseif ($age >= 46 && $age <= 60) {

        return 0.02;

    }
    else {

        return 0.03;

    }

}


// Function to calculate premium

function calculatePremium(
    $coverage_amount,
    $age_rate,
    $policy_term
)
{

    $premium =
        $coverage_amount
        * $age_rate
        * $policy_term;

    return $premium;

}


// Get age rate

$age_rate = getAgeRate($age);


// Calculate premium

$premium_amount = calculatePremium(
    $coverage_amount,
    $age_rate,
    $policy_term
);

?>

<html>

<head>

    <title>Insurance Policy Summary</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>Insurance Policy Summary</h1>

    <h2>Premium Calculated Successfully!</h2>


    <div class="policy-summary">

        <h3>Customer Details</h3>

        <p>
            <b>Customer Name:</b>
            <?php echo htmlspecialchars($customer_name); ?>
        </p>

        <p>
            <b>Age:</b>
            <?php echo $age; ?> years
        </p>


        <h3>Policy Details</h3>

        <p>
            <b>Policy Term:</b>
            <?php echo $policy_term; ?> years
        </p>

        <p>
            <b>Coverage Amount:</b>
            ₹<?php echo number_format(
                $coverage_amount,
                2
            ); ?>
        </p>

        <p>
            <b>Age Rate:</b>
            <?php echo ($age_rate * 100); ?>%
        </p>


        <hr>


        <h2>
            Premium Amount:
            ₹<?php echo number_format(
                $premium_amount,
                2
            ); ?>
        </h2>

    </div>


    <a href="index.php">
        Calculate Another Premium
    </a>

</div>

</body>

</html>