<html>

<head>

    <title>Customer Registration System</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>Customer Registration</h1>

    <p class="intro">
        Please enter your details to register as a customer.
    </p>

    <form action="register.php" method="POST">

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


        <label>Gender:</label>

        <div class="gender">

            <label>
                <input
                    type="radio"
                    name="gender"
                    value="Male"
                    required
                >
                Male
            </label>

            <label>
                <input
                    type="radio"
                    name="gender"
                    value="Female"
                >
                Female
            </label>

            <label>
                <input
                    type="radio"
                    name="gender"
                    value="Other"
                >
                Other
            </label>

        </div>


        <label>Date of Birth:</label>

        <input
            type="date"
            name="dob"
            required
        >


        <label>City:</label>

        <select name="city" required>

            <option value="">
                -- Select City --
            </option>

            <option value="Chennai">
                Chennai
            </option>

            <option value="Bangalore">
                Bangalore
            </option>

            <option value="Coimbatore">
                Coimbatore
            </option>

            <option value="Madurai">
                Madurai
            </option>

            <option value="Other">
                Other
            </option>

        </select>


        <label>Address:</label>

        <textarea
            name="address"
            rows="4"
            placeholder="Enter your address"
            required
        ></textarea>


        <label>Password:</label>

        <input
            type="password"
            name="password"
            minlength="8"
            placeholder="Enter minimum 8 characters"
            required
        >


        <label>Confirm Password:</label>

        <input
            type="password"
            name="confirm_password"
            minlength="8"
            placeholder="Re-enter your password"
            required
        >


        <button type="submit">
            Register Now
        </button>

    </form>

</div>

</body>

</html>