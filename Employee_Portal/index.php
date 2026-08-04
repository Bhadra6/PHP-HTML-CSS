<html>

<head>

    <title>Employee Information Portal</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>Employee Information Portal</h1>

    <p class="intro">
        Enter your employee details to create your employee profile.
    </p>

    <form action="profile.php" method="POST">

        <label>Employee Name:</label>

        <input
            type="text"
            name="employee_name"
            placeholder="Enter employee name"
            required
        >


        <label>Employee ID:</label>

        <input
            type="text"
            name="employee_id"
            placeholder="Enter employee ID"
            required
        >


        <label>Email Address:</label>

        <input
            type="email"
            name="email"
            placeholder="Enter email address"
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


        <label>Department:</label>

        <select name="department" required>

            <option value="">
                -- Select Department --
            </option>

            <option value="Computer Science">
                Computer Science
            </option>

            <option value="Human Resources">
                Human Resources
            </option>

            <option value="Finance">
                Finance
            </option>

            <option value="Marketing">
                Marketing
            </option>

            <option value="Sales">
                Sales
            </option>

        </select>


        <label>Designation:</label>

        <input
            type="text"
            name="designation"
            placeholder="Enter designation"
            required
        >


        <label>Date of Joining:</label>

        <input
            type="date"
            name="joining_date"
            required
        >


        <label>Address:</label>

        <textarea
            name="address"
            rows="4"
            placeholder="Enter employee address"
            required
        ></textarea>


        <button type="submit">
            Create Employee Profile
        </button>

    </form>

</div>

</body>

</html>