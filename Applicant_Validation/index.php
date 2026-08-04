<html>

<head>

    <title>Applicant Validation System</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>Applicant Validation System</h1>

    <form action="process.php" method="POST">

        <label>Email ID:</label>

        <input
            type="email"
            name="email"
            placeholder="Enter your email"
            required
        >

        <label>Password:</label>

        <input
            type="password"
            name="password"
            placeholder="Enter password"
            required
        >

        <label>Mobile Number:</label>

        <input
            type="text"
            name="mobile"
            placeholder="Enter 10-digit mobile number"
            required
        >

        <button type="submit">
            Validate
        </button>

    </form>

</div>

</body>

</html>