<?php
// Include the database connection file
include ('connect.php');
include ('index_process.php');



// Check if the form was submitted using the "register" button

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Sets character encoding -->
    <title>Registration Form</title> <!-- Page title in browser tab -->

    <!-- Link to external CSS file for styling -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container"> <!-- A styled box for the form -->
        <h1>Registration Form</h1> <!-- Form title -->

        <!-- The form element: submits data to the same file via POST method -->
        <form action="" method="post">

            <label>Username:</label>
            <input type="text" name="username" required><br>

            <label>Password:</label>
            <input type="password" name="password" required><br>

            <!-- First name input -->
            <label>First Name:</label>
            <input type="text" name="Firstname" required><br>

            <!-- Middle name input -->
            <label>Middle Name:</label>
            <input type="text" name="Middlename" required><br>

            <!-- Last name input -->
            <label>Last Name:</label>
            <input type="text" name="Lastname" required><br>

            <!-- Gender selection dropdown -->
            <label>Gender</label>
            <select name="Gender" required>
                <option value="" disabled selected>Select Gender</option>
                <option>Male</option>
                <option>Female</option>
            </select><br>

            <!-- Birth date picker -->
            <label>Birth Date:</label>
            <input type="date" name="Date" required><br>

            <!-- Phone number input -->
            <label>Phone Number:</label>
            <input type="text" name="Phonenumber" required><br>

            <!-- Email input -->
            <label>Email:</label>
            <input type="email" name="Email" required><br>

            <!-- Submit button (named "register" so PHP can detect it) -->
            <input type="submit" name="register" value="Sign Up">
           
        </form>
        <button type="button" onclick="window.location.href='website/login.php'">Log In</button>

    </div>
</body>
</html>
