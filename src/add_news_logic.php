<?php
session_start();
$userid=$_SESSION["usersess"]["id"]; 
include "connectdb.php";

if($connection->error==false){
    if(isset($_POST["add_news"])){
        $category_name=$_POST["category_name"];
        $address=$_POST["address"];
        $details=$_POST["details"];
        $photo=$_POST["photo"];

        if(empty($category_name) || empty($address) || empty($details) || empty($photo)){
            header("Location:add_news.php");
        }else{
        $sql="INSERT INTO addnews(category_news,address,details,news_photo,user_id)
        VALUES('$category_name','$address','$details','$photo','$userid')";
        $result=$connection->query($sql);
        if($result==true){
           header("Location:view_news.php?created=true");
       //echo "insertion done";
        }else{
            echo "insetion fail".$connection->error;
        }

    }

    }
}




?>