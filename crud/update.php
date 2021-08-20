<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"> 
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php 

include 'connection.php';
$record = mysqli_query($con,'SELECT * FROM `tblimg`');
$data = mysqli_fetch_array($record);

?>

<div class='main'>
<form action='update1.php'method='POST' enctype='multipart/form-data'>
    <div>
        <label>Image:</label>
        <td><input type='file' name='img1' value='<?php echo $data['img1'] ?>'><br><br>
        <div class="flex-parent jc-center">
        <button type='submit' name='update' class='btnbtn-danger'>Update</button>
        </div>
        <br><img src='<?php echo $data['img1'] ?>'></td>  
    </div>
    <!-- <div>
        <label>Image 2:</label>
        <input type='file' name='img2'>
    </div> 
    <div>
        <label>Image 3:</label>
        <input type='file' name='img3'>
    </div> -->
    
</form>
</div>