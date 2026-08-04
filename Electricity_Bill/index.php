<html>

<head>

    <title>Electricity Bill Calculator</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>Electricity Bill Calculator</h1>

    <form action="process.php" method="POST">

        <label>Enter Electricity Units Consumed:</label>

        <input
            type="number"
            name="units"
            min="0"
            placeholder="Enter units"
            required
        >

        <button type="submit">
            Calculate Bill
        </button>

    </form>

</div>

</body>

</html>