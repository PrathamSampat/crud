<?php

// include db connection
include 'connection.php';

if(isset($_POST['upload'])){
    $img1 = $_FILES['img1'];
    // $img2 = $_FILES['img2'];
    // $img3 = $_FILES['img3'];
    // print_r($_FILES['img1']);
    // print_r($_FILES['img2']);
    // print_r($_FILES['img3']);
    $img_loc1 = $_FILES['img1']['tmp_name'];
    $img_name1 = $_FILES['img1']['name'];
    $img_des1 = "images/".$img_name1;
    // $img_loc2 = $_FILES['img2']['tmp_name'];
    // $img_name2 = $_FILES['img2']['name'];
    // $img_des2 = "images/".$img_name2;
    // $img_loc3 = $_FILES['img3']['tmp_name'];
    // $img_name3 = $_FILES['img3']['name'];
    // $img_des3 = "images/".$img_name3;
    move_uploaded_file($img_loc1,'images/'.$img_name1);
    // move_uploaded_file($img_loc2,'images/'.$img_name2);
    // move_uploaded_file($img_loc3,'images/'.$img_name3);
    mysqli_query($con, "INSERT INTO `tblimg`(`img1`) VALUES ('$img_des1')");
}
header('location:index.php');

?>