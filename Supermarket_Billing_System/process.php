<?php

$customer = $_POST["customer"];
$product = $_POST["product"];
$quantity = $_POST["quantity"];
$price = $_POST["price"];

// Calculate Total
$total = $quantity * $price;

// 10% Discount
$discount = $total * 0.10;

// Amount after Discount
$subtotal = $total - $discount;

// 5% GST
$tax = $subtotal * 0.05;

// Final Amount
$grandtotal = $subtotal + $tax;

?>

<html>
<head>
<title>Customer Invoice</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h1>Customer Invoice</h1>

<p><b>Customer Name:</b> <?php echo $customer; ?></p>

<p><b>Product:</b> <?php echo $product; ?></p>

<p><b>Quantity:</b> <?php echo $quantity; ?></p>

<p><b>Price per Item:</b> ₹<?php echo $price; ?></p>

<hr>

<p><b>Total Amount:</b> ₹<?php echo $total; ?></p>

<p><b>Discount (10%):</b> ₹<?php echo $discount; ?></p>

<p><b>Subtotal:</b> ₹<?php echo $subtotal; ?></p>

<p><b>GST (5%):</b> ₹<?php echo $tax; ?></p>

<h2>Grand Total: ₹<?php echo $grandtotal; ?></h2>

<a href="index.php">Generate Another Bill</a>

</div>

</body>
</html>