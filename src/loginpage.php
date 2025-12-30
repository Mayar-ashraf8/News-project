<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>
    <center>
        <h2>Log In</h2>
        <?php
        if(isset($_GET["statusCode"])){
             if($_GET["statusCode"]=="201"){
                echo "<h2>Account created</h2>";
            }
        }
        ?>
        <form action="login_logic.php" method="post">
            <label>Email</label><br>
            <input type="email" name="email"><br>
            <label>Password</label><br>
            <input type="password" name="password"><br>
            <input type="submit" name="login" value="login">

        </form>
    </center>
    
</body>
</html>