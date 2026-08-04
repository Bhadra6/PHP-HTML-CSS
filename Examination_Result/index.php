<html>

<head>

    <title>Examination Result Analysis System</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>Examination Result Analysis System</h1>

    <p class="intro">
        Enter student details and marks to calculate
        the examination result.
    </p>

    <form action="result.php" method="POST">

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


        <label>English Marks:</label>

        <input
            type="number"
            name="english"
            min="0"
            max="100"
            placeholder="Enter marks out of 100"
            required
        >


        <label>Mathematics Marks:</label>

        <input
            type="number"
            name="mathematics"
            min="0"
            max="100"
            placeholder="Enter marks out of 100"
            required
        >


        <label>Computer Science Marks:</label>

        <input
            type="number"
            name="computer_science"
            min="0"
            max="100"
            placeholder="Enter marks out of 100"
            required
        >


        <label>Data Science Marks:</label>

        <input
            type="number"
            name="data_science"
            min="0"
            max="100"
            placeholder="Enter marks out of 100"
            required
        >


        <label>Digital Marketing Marks:</label>

        <input
            type="number"
            name="digital_marketing"
            min="0"
            max="100"
            placeholder="Enter marks out of 100"
            required
        >


        <button type="submit">
            Analyze Result
        </button>

    </form>

</div>

</body>

</html>