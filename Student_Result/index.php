<!DOCTYPE html>
<html>

<head>

    <title>Student Result Processing System</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>Student Result Processing System</h1>

    <form action="process.php" method="POST">

        <label>Student Name:</label>
        <input type="text" name="name" required>

        <label>Register Number:</label>
        <input type="text" name="register_number" required>

        <label>English Mark:</label>
        <input type="number" name="english" min="0" max="100" required>

        <label>Computer Science Mark:</label>
        <input type="number" name="computer" min="0" max="100" required>

        <label>Mathematics Mark:</label>
        <input type="number" name="maths" min="0" max="100" required>

        <label>Data Science Mark:</label>
        <input type="number" name="data_science" min="0" max="100" required>

        <label>PHP Mark:</label>
        <input type="number" name="php" min="0" max="100" required>

        <button type="submit">Calculate Result</button>

    </form>

</div>

</body>

</html>