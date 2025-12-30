
<?php
session_start();
$userid=$_SESSION["usersess"]["id"]; 
include "connectdb.php";

$sql = "SELECT * FROM addnews WHERE is_deleted = 0 OR is_deleted IS NULL and user_id=$userid";


$result = $connection->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIEW NEWS</title>
</head>
<?php 
if(isset($_GET["deleted"])){
    if($_GET["deleted"]=="true"){
        echo "<h2>deletde</h2>";
    }
    }

     if(isset($_GET["created"])){
        if($_GET["created"]=="true"){
            echo "<h2>Created </h2>";
        }
     }
     
      if(isset($_GET["updated"])){
        if($_GET["updated"]=="true"){
            echo "<h2>Updated</h2>";
        }
     }
    
    
     
     ?>
<body>
    <center>
        <h2>View News</h2>
        <table border="1px">
            <tr>
                <th>Category Name</th>
                <th>News Address</th>
                <th>Details</th>
                <th>Image</th>
                <th>Update News</th>
                <th>Delete News</th>

            </tr>
            <?php if($result->num_rows != 0) { ?>
                <?php while($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row["category_news"]; ?></td>
                        <td><?php echo $row["address"]; ?></td>
                        <td><?php echo $row["details"]; ?></td>
                        <td><?php echo $row["news_photo"];?></td>
                         <td>
                        <a href="update_news.php?id=<?php echo $row['user_id']; ?>&category_name=<?php echo $row['category_news']; ?>
                        &address=<?php echo $row['address']; ?>&details=<?php echo $row['details']; ?>&photo=<?php echo $row['news_photo']; ?>">Update News</a>
                      </td>
                        <td>
                           <a href="delete_news.php?id=<?php echo $row['user_id']; ?>">Delete News</a> 
                       </td>
                </tr>                
                <?php } ?>
            <?php } ?>
        </table>
    </center>
</body>
</html>
                
