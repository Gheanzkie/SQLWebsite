<?php

if (isset($_POST['register'])) {

    // Get each value from the form and store it in PHP variables
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $Fname = $_POST['Firstname'];
    $Mname = $_POST['Middlename'];
    $Lname = $_POST['Lastname'];
    $Gender = $_POST['Gender'];
    $Date = $_POST['Date'];               // Birthdate
    $Pnumber = $_POST['Phonenumber'];     // Phone number
    $Email = $_POST['Email'];

    // Create the SQL query to insert data into the "form" table
    $query = "INSERT INTO form (username, password, Firstname, Middlename, Lastname, gender, Date, Phonenumber, Email)
              VALUES ('$username', '$password', '$Fname', '$Mname', '$Lname', '$Gender', '$Date', '$Pnumber', '$Email')";

    // Connect to the database (you already did this in connect.php, so this line can be removed)
    $conn = mysqli_connect("localhost", "root", "", "ghean_database");

    // Execute the query using the connection
    $data = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($data) {
        echo "✅ Data inserted successfully.";
    } else {
        // If there was an error, display it
        echo "❌ Error: ". mysqli_error($conn);
    }
}



?>