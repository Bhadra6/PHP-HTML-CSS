<html>
<head>
    <title>Supermarket Billing System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h1>Supermarket Billing System</h1>

<form action="process.php" method="POST">

<label>Customer Name</label>
<input type="text" name="customer" required>

<label>Product Name</label>
<input type="text" name="product" required>

<label>Quantity</label>
<input type="number" name="quantity" required>

<label>Price per Item (₹)</label>
<input type="number" name="price" required>

<input type="submit" value="Generate Bill">

</form>

</div>

</body>
</html>