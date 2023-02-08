
<?php
    session_start(); 
    include("config.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<div class="header">
    <h2>Regster</h2>
</div>

<form action="register_db.php" method="post">
    <div class="input-group">
        <label for="username">Username</label>
        <input type="text" name="username">
    </div>
    <div class="input-group">
        <label for="email">Email</label>
        <input type="email" name="email">
    </div>
    <div class="input-group">
        <label for="password_1">Password</label>
        <input type="password" name="password_1">
    </div>
    <div class="input-group">
        <label for="password_2">Confrim Password</label>
        <input type="password" name="password_2">
    </div>
    <div class="input-group">
        <button type="submit" name="reg_user" class="btn">Regsiter</button>
    </div>
    <p>Already a member? <a href="login.php"> sign in</a></p>
</form>
    
</body>
</html>