<html>

<head>

    <title>Course Registration System</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>Course Registration</h1>

    <form action="process.php" method="POST">

        <label>Student Name:</label>
        <input 
            type="text" 
            name="student_name"
            placeholder="Enter your name"
            required
        >

        <label>Register Number:</label>
        <input 
            type="text" 
            name="register_number"
            placeholder="Enter register number"
            required
        >

        <label>Email:</label>
        <input 
            type="email" 
            name="email"
            placeholder="Enter your email"
            required
        >

        <label>Phone Number:</label>
        <input 
            type="tel" 
            name="phone"
            placeholder="Enter your phone number"
            pattern="[0-9]{10}"
            title="Please enter a valid 10-digit phone number"
            required
        >

        <label>Select Course:</label>

        <select name="course" required>

            <option value="">Select a Course</option>

            <option value="Web Development">
                Web Development
            </option>

            <option value="Data Science">
                Data Science
            </option>

            <option value="Cyber Security">
                Cyber Security
            </option>

            <option value="Artificial Intelligence">
                Artificial Intelligence
            </option>

        </select>

        <label>Select Study Mode:</label>

        <select name="mode" required>

            <option value="">Select Study Mode</option>

            <option value="Online">Online</option>

            <option value="Offline">Offline</option>

            <option value="Hybrid">Hybrid</option>

        </select>

        <button type="submit">
            Register Now
        </button>

    </form>

</div>

</body>

</html>