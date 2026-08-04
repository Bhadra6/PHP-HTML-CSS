<html>

<head>

    <title>Parent-Teacher Meeting Registration</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>Parent-Teacher Meeting Registration</h1>

    <p class="intro">
        Please fill in the details below to book a meeting
        appointment with the teacher.
    </p>

    <form action="confirmation.php" method="POST">

        <label>Parent Name:</label>

        <input
            type="text"
            name="parent_name"
            placeholder="Enter parent name"
            required
        >


        <label>Student Name:</label>

        <input
            type="text"
            name="student_name"
            placeholder="Enter student name"
            required
        >


        <label>Student Class:</label>

        <select name="student_class" required>

            <option value="">
                -- Select Class --
            </option>

            <option value="Class 8">
                Class 8
            </option>

            <option value="Class 9">
                Class 9
            </option>

            <option value="Class 10">
                Class 10
            </option>

            <option value="Class 11">
                Class 11
            </option>

            <option value="Class 12">
                Class 12
            </option>

        </select>


        <label>Parent Email:</label>

        <input
            type="email"
            name="email"
            placeholder="Enter email address"
            required
        >


        <label>Mobile Number:</label>

        <input
            type="text"
            name="mobile"
            pattern="[0-9]{10}"
            placeholder="Enter 10-digit mobile number"
            required
        >


        <label>Teacher Name:</label>

        <select name="teacher_name" required>

            <option value="">
                -- Select Teacher --
            </option>

            <option value="Mrs. Priya">
                Mrs. Priya
            </option>

            <option value="Mr. Kumar">
                Mr. Kumar
            </option>

            <option value="Ms. Anitha">
                Ms. Anitha
            </option>

            <option value="Mrs. Divya">
                Mrs. Divya
            </option>

        </select>


        <label>Meeting Date:</label>

        <input
            type="date"
            name="meeting_date"
            required
        >


        <label>Meeting Time Slot:</label>

        <select name="time_slot" required>

            <option value="">
                -- Select Time Slot --
            </option>

            <option value="10:00 AM - 10:30 AM">
                10:00 AM - 10:30 AM
            </option>

            <option value="10:30 AM - 11:00 AM">
                10:30 AM - 11:00 AM
            </option>

            <option value="11:00 AM - 11:30 AM">
                11:00 AM - 11:30 AM
            </option>

            <option value="11:30 AM - 12:00 PM">
                11:30 AM - 12:00 PM
            </option>

            <option value="2:00 PM - 2:30 PM">
                2:00 PM - 2:30 PM
            </option>

        </select>


        <label>Purpose of Meeting:</label>

        <textarea
            name="purpose"
            rows="4"
            placeholder="Enter the purpose of the meeting"
            required
        ></textarea>


        <button type="submit">
            Book Appointment
        </button>

    </form>

</div>

</body>

</html>