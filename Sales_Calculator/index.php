<html>

<head>

    <title>Sales Calculator</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>Sales Calculator</h1>

    <form action="process.php" method="POST">

        <label>Product Name:</label>

        <input
            type="text"
            name="product_name"
            placeholder="Enter product name"
            required
        >

        <label>Product Quantity:</label>

        <input
            type="number"
            name="quantity"
            min="1"
            placeholder="Enter quantity"
            required
        >

        <label>Product Price:</label>

        <input
            type="number"
            name="price"
            min="0"
            step="0.01"
            placeholder="Enter price"
            required
        >

        <button type="submit">
            Calculate Sales
        </button>

    </form>

</div>

</body>

</html>