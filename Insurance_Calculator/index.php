<html>

<head>

    <title>Insurance Premium Calculator</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>Insurance Premium Calculator</h1>

    <p class="intro">
        Enter your details to calculate the insurance premium.
    </p>

    <form action="process.php" method="POST">

        <label>Customer Name:</label>

        <input
            type="text"
            name="customer_name"
            placeholder="Enter your name"
            required
        >


        <label>Age:</label>

        <input
            type="number"
            name="age"
            min="18"
            max="100"
            placeholder="Enter your age"
            required
        >


        <label>Policy Term (Years):</label>

        <input
            type="number"
            name="policy_term"
            min="1"
            max="30"
            placeholder="Enter policy term"
            required
        >


        <label>Coverage Amount (₹):</label>

        <input
            type="number"
            name="coverage_amount"
            min="10000"
            placeholder="Enter coverage amount"
            required
        >


        <button type="submit">
            Calculate Premium
        </button>

    </form>

</div>

</body>

</html>