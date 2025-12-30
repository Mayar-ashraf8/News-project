<?php
include "connectdb.php";
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update news</title>
</head>
<body>
    <center>
        <h2>Update news</h2>
    <form action="logic_update_news.php" method="post">
        <input type="hidden" name="id_news" value="<?php echo $_GET['id']; ?>">
        <label>Category Name</label><br>
        <input type="text" name="new_category_name" value="<?php echo $_GET["category_name"]?>"><br>
          <label>News Address </label><br>
        <input type="text" name="new_address" value="<?php echo $_GET["address"]?>"> <br>
         <label>Details</label><br>
          <input type="text" name="details"  value="<?php echo $_GET["details"]?>">
        <label>News Image</label><br>
        <input type="file" name="new_photo" value="<?php echo $_GET["photo"]?>"><br>
         <input type="submit" value="update_news" name="update_news">    
    </form>
    </center>
    
</body>
</html>