<?php
session_start();
include "connectdb.php";

$sql = "SELECT * FROM addnews WHERE is_deleted = 1";
$result = $connection->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleted News</title>
</head>
<body>
    <center>
        <h2>Deleted News</h2>

        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <th>Category Name</th>
                <th>News Address</th>
                <th>Details</th>
                <th>Image</th>
            </tr>
             <?php if ($result->num_rows > 0) { ?>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row["category_news"]; ?></td>
                        <td><?php echo $row["address"]; ?></td>
                        <td><?php echo $row["details"]; ?></td>
                        <td><?php echo $row["news_photo"] ?></td>
                     </tr>
                            <?php }?>
                            <?php } ?>

                        