<html>

<head>

    <title>Library Membership Registration</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>Library Membership Registration</h1>

    <p class="intro">
        Fill in the details below to register for library membership.
    </p>

    <form action="register.php" method="POST">

        <label>Member Name:</label>

        <input
            type="text"
            name="member_name"
            placeholder="Enter your full name"
            required
        >


        <label>Email Address:</label>

        <input
            type="email"
            name="email"
            placeholder="Enter your email address"
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


        <label>Date of Birth:</label>

        <input
            type="date"
            name="dob"
            required
        >


        <label>Gender:</label>

        <select name="gender" required>

            <option value="">
                -- Select Gender --
            </option>

            <option value="Female">
                Female
            </option>

            <option value="Male">
                Male
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


        <label>Membership Type:</label>

        <select name="membership_type" required>

            <option value="">
                -- Select Membership Type --
            </option>

            <option value="Student">
                Student Membership
            </option>

            <option value="Regular">
                Regular Membership
            </option>

            <option value="Premium">
                Premium Membership
            </option>

        </select>


        <button type="submit">
            Register for Membership
        </button>

    </form>

</div>

</body>

</html>