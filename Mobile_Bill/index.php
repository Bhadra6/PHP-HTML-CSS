<html>

<head>

    <title>Mobile Bill Generator</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>Mobile Bill Generator</h1>

    <p class="intro">
        Enter your customer details and usage information.
    </p>

    <form action="process.php" method="POST">

        <label>Customer Name:</label>

        <input
            type="text"
            name="customer_name"
            placeholder="Enter customer name"
            required
        >


        <label>Mobile Number:</label>

        <input
            type="text"
            name="mobile_number"
            pattern="[0-9]{10}"
            placeholder="Enter 10-digit mobile number"
            required
        >


        <label>Select Tariff Plan:</label>

        <select name="plan" required>

            <option value="">Select a Plan</option>

            <option value="Basic">Basic Plan - ₹199</option>

            <option value="Standard">Standard Plan - ₹399</option>

            <option value="Premium">Premium Plan - ₹599</option>

        </select>


        <label>Call Minutes Used:</label>

        <input
            type="number"
            name="call_minutes"
            min="0"
            placeholder="Enter call minutes"
            required
        >


        <label>Data Used (GB):</label>

        <input
            type="number"
            name="data_used"
            min="0"
            step="0.1"
            placeholder="Enter data used in GB"
            required
        >


        <label>SMS Used:</label>

        <input
            type="number"
            name="sms_used"
            min="0"
            placeholder="Enter number of SMS"
            required
        >


        <button type="submit">
            Generate Bill
        </button>

    </form>

</div>

</body>

</html>