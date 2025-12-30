<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add News</title>
</head>
<body>
    <center>
        <h2>ADD NEWS</h2>
    <form action="add_news_logic.php" method="post" >
        <label>Category Name</label><br>
        <input type="text" name="category_name" required><br>
          <label>News Address </label><br>
        <input type="text" name="address" required> <br>
         <label>Details</label><br>
         <input type="text" name="details" required><br>
        <label>News Image</label><br>
        <input type="file" name="photo" required><br>
         <input type="submit" value="add_news" name="add_news">    
    </form>
    </center>
    
</body>
</html>