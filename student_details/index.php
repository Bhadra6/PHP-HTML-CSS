<!DOCTYPE html>
<html>

<head>
    <title>Student Details Form</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Student Details Form</h1>

    <form action="process.php" method="POST">

        <label>Student Name:</label>
        <input type="text" name="name" required>

        <label>Register Number:</label>
        <input type="text" name="register_number" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Course:</label>
        <input type="text" name="course" required>

        <label>Department:</label>
        <input type="text" name="department" required>

        <label>Year:</label>
        <select name="year" required>
            <option value="">Select Year</option>
            <option value="1st Year">1st Year</option>
            <option value="2nd Year">2nd Year</option>
            <option value="3rd Year">3rd Year</option>
        </select>

        <button type="submit">Submit</button>

    </form>

</div>

</body>
</html>