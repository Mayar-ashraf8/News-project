<?php
session_start();
if(isset($_SESSION["usersess"])!= true){
    header("Location:loginpage.php");
}

$name=$_SESSION["usersess"]["name"];
include "connectdb.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dash Board</title>
</head>
<body>
    <center>
        <h2 > Hello <?php echo $name ?> in Dashboard</h2>
        <a href="add_category.php">Add Gategory</a><br>
        <a href="view_categotry.php">View Gategory</a><br>
        <a href="add_news.php">Add News</a><br><br>
        <a href="view_news.php">View News</a><br>
        <a href="view_deleted_news.php">view Deleted News</a><br>

    </center>
    
</body>
</html>