<?php
include "connectdb.php";

if($_GET["id"]){
    $id=$_GET["id"];

    $sql = "UPDATE addnews SET is_deleted = 1 WHERE user_id = $id";
    $result=$connection->query($sql);
    if($result==true){
        header("Location:view_news.php?deleted=true");
    }


}
?>
