<?php

// Get the values from the form

$product_name = $_POST["product_name"];

$quantity = $_POST["quantity"];

$price = $_POST["price"];


// User-defined function

function calculateSalesValue($quantity, $price)
{
    $total = $quantity * $price;

    return $total;
}


// Call the user-defined function

$total_sales = calculateSalesValue($quantity, $price);

?>

<html>

<head>

    <title>Sales Calculation Result</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>Sales Calculation Result</h1>

    <h2>Sales Value Calculated Successfully!</h2>

    <p>
        <b>Product Name:</b>
        <?php echo $product_name; ?>
    </p>

    <p>
        <b>Product Quantity:</b>
        <?php echo $quantity; ?>
    </p>

    <p>
        <b>Product Price:</b>
        ₹<?php echo number_format($price, 2); ?>
    </p>

    <hr>

    <h2>
        Total Sales Value:
        ₹<?php echo number_format($total_sales, 2); ?>
    </h2>

    <br>

    <a href="index.php">
        Calculate Another Sale
    </a>

</div>

</body>

</html>