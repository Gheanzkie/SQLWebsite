<?php

if (isset($_POST['register'])) {


    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $Fname = $_POST['Firstname'];
    $Mname = $_POST['Middlename'];
    $Lname = $_POST['Lastname'];
    $Gender = $_POST['Gender'];
    $Date = $_POST['Date'];              
    $Pnumber = $_POST['Phonenumber'];    
    $Email = $_POST['Email'];

   
    $query = "INSERT INTO form (username, password, Firstname, Middlename, Lastname, gender, Date, Phonenumber, Email)
              VALUES ('$username', '$password', '$Fname', '$Mname', '$Lname', '$Gender', '$Date', '$Pnumber', '$Email')";

   
    $conn = mysqli_connect("localhost", "root", "", "ghean_database");

    
    $data = mysqli_query($conn, $query);

    
    if ($data) {
        echo "✅ Data inserted successfully.";
    } else {
       
        echo "❌ Error: ". mysqli_error($conn);
    }
}



?>