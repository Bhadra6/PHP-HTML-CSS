<?php

// Get the units entered by the user
$units = $_POST["units"];

// Calculate bill based on slab rates

if ($units <= 100) {

    $bill = $units * 1.50;

}
elseif ($units <= 200) {

    $bill = (100 * 1.50) + (($units - 100) * 2.50);

}
elseif ($units <= 500) {

    $bill = (100 * 1.50) + 
            (100 * 2.50) + 
            (($units - 200) * 4.00);

}
else {

    $bill = (100 * 1.50) + 
            (100 * 2.50) + 
            (300 * 4.00) + 
            (($units - 500) * 6.00);

}

?>

<html>

<head>

    <title>Electricity Bill</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>Electricity Bill</h1>

    <h2>Bill Generated Successfully!</h2>

    <p>
        <b>Units Consumed:</b>
        <?php echo $units; ?> units
    </p>

    <hr>

    <p>
        <b>Total Electricity Charges:</b>
        ₹<?php echo number_format($bill, 2); ?>
    </p>

    <h2>
        Total Bill Amount: ₹<?php echo number_format($bill, 2); ?>
    </h2>

    <br>

    <a href="index.php">
        Calculate Another Bill
    </a>

</div>

</body>

</html>