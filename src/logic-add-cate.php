<?php
session_start();
include "connectdb.php";
if(isset($_POST["add_category"])){
    $category=$_POST["category"];
    $sql="INSERT INTO categories(category_news)VALUES ('$category')";
    $result=$connection->query($sql);
    if($result==true){
        header("Location:view_categotry.php");
       // echo "insert done";
    }else{
        echo "inset fail";
    }
}
 

?>
