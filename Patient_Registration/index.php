<html>

<head>

    <title>Patient Registration System</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>Patient Registration System</h1>

    <form action="process.php" method="POST">

        <label>Patient Name:</label>

        <input 
            type="text"
            name="patient_name"
            placeholder="Enter patient name"
            required
        >

        <label>Age:</label>

        <input 
            type="number"
            name="age"
            min="1"
            max="120"
            placeholder="Enter age"
            required
        >

        <label>Gender:</label>

        <select name="gender" required>

            <option value="">Select Gender</option>

            <option value="Male">Male</option>

            <option value="Female">Female</option>

            <option value="Other">Other</option>

        </select>

        <label>Phone Number:</label>

        <input 
            type="tel"
            name="phone"
            pattern="[0-9]{10}"
            placeholder="Enter 10-digit phone number"
            required
        >

        <label>Email:</label>

        <input 
            type="email"
            name="email"
            placeholder="Enter email address"
            required
        >

        <label>Address:</label>

        <textarea 
            name="address"
            rows="4"
            placeholder="Enter address"
            required
        ></textarea>

        <label>Problem / Reason for Visit:</label>

        <textarea 
            name="problem"
            rows="4"
            placeholder="Enter reason for visit"
            required
        ></textarea>

        <button type="submit">
            Register Patient
        </button>

    </form>

</div>

</body>

</html>