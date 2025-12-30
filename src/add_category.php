<?php
session_start();
include "connectdb.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add category</title>
</head>
<body>
    <form action="logic-add-cate.php" method="post">
     <label>News category </label><br>
     <input type="text" name=category><br>
     <input type="submit" name="add_category" value="add_category">
    </form>
    
</body>
</html>