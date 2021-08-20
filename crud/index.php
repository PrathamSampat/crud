<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class='main'>
        <form action='insert.php'method='POST' enctype='multipart/form-data'>
            <div>
                <label>Image:</label>
                <input type='file' name='img1'>  
            </div>
            <!-- <div>
                <label>Image 2:</label>
                <input type='file' name='img2'>
            </div> 
            <div>
                <label>Image 3:</label>
                <input type='file' name='img3'>
            </div> -->
            <div class='center'>
                <br><button type='submit' name='upload'>Upload</button>
            </div>
        </form>

        <br>    
        <br>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Image</th>
      <!-- <th scope="col">Image2</th>
      <th scope="col">Image3</th> -->
      <th scope="col">Delete</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <tbody>
      
    
    <?php
        include 'connection.php';
        $pic = mysqli_query($con,"SELECT * FROM `tblimg`");
        while($row = mysqli_fetch_array($pic)){
            echo"
                <tr>
                    <td><img src='$row[img1]'></td>
                    <td><a href='delete.php?' class='btn btn-danger'>Delete</a></td>
                    <td><a href='update.php?' class='btn btn-danger'>Update</a></td>
                </tr>
            ";
        }
        ?>

  </tbody>
</table>

    </div>
</body>
</html>