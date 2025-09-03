<?php
include ('index_process.php');




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <title>Registration Form</title> 

    
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container"> 
        <h1>Registration Form</h1> 

       
        <form action="" method="post">

            <label>Username:</label>
            <input type="text" name="username" required><br>

            <label>Password:</label>
            <input type="password" name="password" required><br>

      
            <label>First Name:</label>
            <input type="text" name="Firstname" required><br>

           
            <label>Middle Name:</label>
            <input type="text" name="Middlename" required><br>

           
            <label>Last Name:</label>
            <input type="text" name="Lastname" required><br>

         
            <label>Gender</label>
            <select name="Gender" required>
                <option value="" disabled selected>Select Gender</option>
                <option>Male</option>
                <option>Female</option>
            </select><br>

           
            <label>Birth Date:</label>
            <input type="date" name="Date" required><br>

          
            <label>Phone Number:</label>
            <input type="text" name="Phonenumber" required><br>

          
            <label>Email:</label>
            <input type="email" name="Email" required><br>

          
            <input type="submit" name="register" value="Sign Up">
           
        </form>
        <button type="button" onclick="window.location.href='website/login.php'">Log In</button>

    </div>
</body>
</html>
