<?php
include "connectdb.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
</head>
<body>
<center>
    <h2>Create Your Account</h2>
    <form action="logic-create-account.php" method="post">
        <label>Enter your Name</label><br>
        <input type="text" name=name placeholder="Name" ><br>
        <label>Enter yourn Email</label><br>
        <input type="email" name=email placeholder="Email" ><br>
        <label>Enter your password</label><br>
        <input type="password" name=password placeholder="password" ><br>
        <input type="submit" name=create value="Create My Account">
        


    </form>
</center>
    
</body>
</html>