<?php
 include 'Project_DB_Query.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Slider</title>
    <style>
        .container{
            width:50%;
            margin:100px auto;
        }
        .container h1{
            text-align: center;
            background-color:blueviolet;
            padding:10px 0px;
            color:white;
            font-family:Arial, Helvetica, sans-serif;
        }
        .container form{
            width:50%;
            display: block;
            margin: 0 auto;
        }
        .container form label{
            text-align: center;
            font-size:18px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        .container form input{
            width:100%;
            padding:10px 5px;
        }
    </style>
</head>
<body>
   <div class="container">
    <h1>Add Heritage Slider :) </h1>
   <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
          <label for="image">Add IMAGE :</label>
          <input type="file" name="image" id="image"><br><br>

          <label for="Heading">Add IMAGE Heading:</label>
          <input type="text" name="head" id="heading"><br><br>  


          <label for="para">Add Discription:</label>
          <textarea name="para" id="para" cols="50" rows="10"></textarea><br><br>

          <input type="submit" value="submit" name="submit">
    </form>
   </div>
</body>
</html>

<!-- php section  -->
<?php 
$img = $head = $para='';
 if(isset($_POST['submit'])){

      $head = $_POST['head']."<br>";
      $para = $_POST['para']."<br>";

     $img = $_FILES['image'];
    if(isset($img)){
        $imgname = $img['name'];
        $imgsize = $img['size'];
        $imgerror = $img['error'];
        $imgtmp = $img['tmp_name'];

        $fileext  = explode('.',$imgname);
        $filecheck = strtolower(end($fileext));
        $filestored = array('jpeg','png','jpg');

        if(in_array($filecheck,$filestored)){
            $fileDestination = 'images/'.$imgname;
            if(move_uploaded_file($imgtmp,$fileDestination)){
                $sql = "INSERT INTO heritage_slider(image,head,para) VALUES('$fileDestination','$head','$para')";
                if(mysqli_query($conn,$sql)){
                    echo '<script>alert("Inserted Data"); </script>';
                }
        }
        else{
            echo '<script>alert("Not Uploaded"); </script>';
        }
    }
 }
}

?>