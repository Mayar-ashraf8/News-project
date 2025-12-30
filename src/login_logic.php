<?php
session_start();
include "connectdb.php";
if($connection->error==false){
    if(isset($_POST["login"])){
        $uemail=$_POST["email"];
        $upassword=$_POST["password"];

 $sql="SELECT * FROM users WHERE email='$uemail'";
$result=$connection->query($sql);
if($result->num_rows > 0){
    $data=$result->fetch_assoc();
   if( password_verify($upassword,$data["password"])){
    $_SESSION["usersess"]=$data;
    header("Location:dashboardUI.php");
    // echo "login done";
   }else{
    echo "login fail";
   }
   
}else{
    echo "login faile";
}
    }
}
?>