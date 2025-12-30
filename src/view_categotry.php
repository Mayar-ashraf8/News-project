<?php
session_start();
include "connectdb.php";
$sql="SELECT * FROM categories";
$result=$connection->query($sql);
if($result->num_rows>0){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view category</title>
</head>
<body>
    <center>
    <h2> View Category</h2>
    <table border="1px solid black">
        <th>
        Categories
        </th>
        <?php while($row=$result->fetch_assoc()){ ?>
        <tr>
            <td><?php echo  $row['category_news']  ;?></td>
            <?php }?>
           
         <?php }?>
        </tr>

        
    </table>
        </center>
    
</body>
</html>