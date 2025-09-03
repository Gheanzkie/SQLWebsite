<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="index_style.css">
</head>
<body>
    <div class="login-container">
        <form action="index_process.php" method="POST">
            <div class="login">
            <h1>LOGIN</h1>
            <div class="input">
            <label>Username</label>
            <input type="text" name="username" required><br>
            <label>Password</label>
            <input type="password" name="password" required><br>
            <button type="submit">Login</button>
            <button type="button" onclick="window.location.href='../index.php'">Register</button>

            </div>
        </form>
        

</div>
    
</body>
</html>