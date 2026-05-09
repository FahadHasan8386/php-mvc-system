<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>
<body>

    <h2>Student Registration Form</h2>

    <form method="POST">

        Name:
        <input type="text" name="name">
        <br><br>

        Email:
        <input type="email" name="email">
        <br><br>

        Course:
        <select name="course">
            <option value="">Select Course</option>
            <option value="CSE">CSE</option>
            <option value="BBA">BBA</option>
            <option value="EEE">EEE</option>
        </select>

        <br><br>

        <input type="submit" value="Register">

    </form>

</body>
</html>