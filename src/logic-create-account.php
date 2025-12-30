<?php
include "connectdb.php";
function validvalue($data){
    $data=trim($data);
    $data=htmlspecialchars($data);
    return $data;
}
if($connection->error==false){
if(isset($_POST["create"])){
    $uname= validvalue($_POST["name"]);
    $uemail= validvalue($_POST["email"]);
    $upassword=password_hash( validvalue($_POST["password"]),PASSWORD_BCRYPT);

    $sql="INSERT INTO users(name,email,password)
    VALUES('$uname','$uemail','$upassword')";

    $result=$connection->query($sql);
    if($result==true){
        header("Location:loginpage.php?statusCode=201");
    }else{
        echo "insert fail";
    }


}
echo "connect done";
}else{
    echo "connect fail";

}
?>