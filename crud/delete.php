<?php 

include 'connection.php';
mysqli_query($con,'DELETE FROM `tblimg`');
header('location:index.php');

?>