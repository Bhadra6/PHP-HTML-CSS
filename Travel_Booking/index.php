<html>

<head>

    <title>Travel Package Booking</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>Travel Package Booking</h1>

    <p class="intro">
        Select your favourite travel package and enter your booking details.
    </p>

    <form action="booking.php" method="POST">

        <label>Customer Name:</label>

        <input
            type="text"
            name="customer_name"
            placeholder="Enter your full name"
            required
        >


        <label>Email Address:</label>

        <input
            type="email"
            name="email"
            placeholder="Enter your email"
            required
        >


        <label>Mobile Number:</label>

        <input
            type="text"
            name="mobile"
            pattern="[0-9]{10}"
            placeholder="Enter 10-digit mobile number"
            required
        >


        <label>Select Travel Package:</label>

        <select name="package" required>

            <option value="">
                -- Select a Package --
            </option>

            <option value="Kerala Trip">
                Kerala Trip - ₹10,000
            </option>

            <option value="Goa Trip">
                Goa Trip - ₹12,000
            </option>

            <option value="Manali Trip">
                Manali Trip - ₹15,000
            </option>

        </select>


        <label>Number of Persons:</label>

        <input
            type="number"
            name="persons"
            min="1"
            max="10"
            placeholder="Enter number of persons"
            required
        >


        <label>Travel Date:</label>

        <input
            type="date"
            name="travel_date"
            required
        >


        <label>Special Requirements:</label>

        <textarea
            name="requirements"
            placeholder="Enter any special requirements"
            rows="4"
        ></textarea>


        <button type="submit">
            Book Now
        </button>

    </form>

</div>

</body>

</html>