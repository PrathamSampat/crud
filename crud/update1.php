<?php 

include 'connection.php';
if(isset($_POST['update'])){
    $img1 = $_FILES['img1'];
    $img_loc1 = $_FILES['img1']['tmp_name'];
    $img_name1 = $_FILES['img1']['name'];
    $img_des1 = "images/".$img_name1;
    move_uploaded_file($img_loc1,'images/'.$img_name1);
    mysqli_query($con, "UPDATE `tblimg` SET `img1`='$img_des1'");
    header('location:index.php');
}
?>