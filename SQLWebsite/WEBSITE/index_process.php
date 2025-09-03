<?php

include ('homepage.php');

session_start(); 


$conn = mysqli_connect("localhost", "root", "", "ghean_database");


if (!$conn) {
    die("❌ Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password']; 


    $sql = "SELECT * FROM form WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
   
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];

        return 'homepage.php';
     
    } else {
        echo "❌ Invalid username or password. <a href='login.php'>try Again</a>";
    }
} else {
    echo "⚠️ Please enter both username and password. ";
}
?>
