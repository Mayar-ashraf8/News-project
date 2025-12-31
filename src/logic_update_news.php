 <?php
 include "connectdb.php";

if($connection->error==false){
    if(isset($_POST["update_news"])){

        $id = $_POST["id_news"];
        $category_name = $_POST["new_category_name"];
        $address = $_POST["new_address"];
        $details = $_POST["new_details"];
        $photo = $_POST["new_photo"];

        $sql = "UPDATE addnews SET category_news='$category_name',address='$address',details='$details',news_photo='$photo'
                WHERE user_id='$id'"; 

        $result = $connection->query($sql);

        if($result == true){
            header("Location:view_news.php?updated=true");
        } else {
            echo "Update failed: ".$connection->error;
        }
    }
}
?>
