<html>

<head>

    <title>Attendance Processing System</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>Attendance Processing System</h1>

    <p class="intro">
        Enter the student's attendance details
        to check examination eligibility.
    </p>

    <form action="process.php" method="POST">

        <label>Student Name:</label>

        <input
            type="text"
            name="student_name"
            placeholder="Enter student name"
            required
        >


        <label>Register Number:</label>

        <input
            type="text"
            name="register_number"
            placeholder="Enter register number"
            required
        >


        <label>Total Number of Classes:</label>

        <input
            type="number"
            name="total_classes"
            min="1"
            placeholder="Enter total classes"
            required
        >


        <label>Number of Classes Attended:</label>

        <input
            type="number"
            name="attended_classes"
            min="0"
            placeholder="Enter attended classes"
            required
        >


        <button type="submit">
            Check Attendance
        </button>

    </form>

</div>

</body>

</html>