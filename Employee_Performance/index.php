<html>

<head>

    <title>Employee Performance Evaluation</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>Employee Performance Evaluation System</h1>

    <p class="intro">
        Enter the employee details and performance scores
        to evaluate the employee.
    </p>

    <form action="evaluate.php" method="POST">

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


        <label>Quality of Work Score:</label>

        <input
            type="number"
            name="quality"
            min="0"
            max="100"
            placeholder="Enter score from 0 to 100"
            required
        >


        <label>Productivity Score:</label>

        <input
            type="number"
            name="productivity"
            min="0"
            max="100"
            placeholder="Enter score from 0 to 100"
            required
        >


        <label>Teamwork Score:</label>

        <input
            type="number"
            name="teamwork"
            min="0"
            max="100"
            placeholder="Enter score from 0 to 100"
            required
        >


        <label>Communication Score:</label>

        <input
            type="number"
            name="communication"
            min="0"
            max="100"
            placeholder="Enter score from 0 to 100"
            required
        >


        <button type="submit">
            Evaluate Performance
        </button>

    </form>

</div>

</body>

</html>