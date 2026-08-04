<html>

<head>

    <title>Employee Salary Processing System</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>Employee Salary Processing System</h1>

    <p class="intro">
        Enter employee details and basic salary
        to calculate the salary summary.
    </p>

    <form action="process.php" method="POST">

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


        <label>Department:</label>

        <input
            type="text"
            name="department"
            placeholder="Enter department"
            required
        >


        <label>Basic Salary:</label>

        <input
            type="number"
            name="basic_salary"
            min="1"
            step="0.01"
            placeholder="Enter basic salary"
            required
        >


        <button type="submit">
            Calculate Salary
        </button>

    </form>

</div>

</body>

</html>