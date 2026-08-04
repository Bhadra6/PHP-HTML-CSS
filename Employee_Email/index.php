<html>

<head>

    <title>Employee Email ID Generator</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>Employee Email ID Generator</h1>

    <form action="process.php" method="POST">

        <label>Enter Employee Name:</label>

        <input 
            type="text" 
            name="employee_name" 
            placeholder="Example: Bhadra PS"
            required
        >

        <button type="submit">Generate Email ID</button>

    </form>

</div>

</body>

</html>