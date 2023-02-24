<?php
 include 'Project_DB_Query.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <h1>Change Password :) </h1>
   <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">

          <label for="username">Username:</label>
          <input type="text" name="username" id="username"><br><br>  

          <label for="prepass">Previous Password:</label>
          <input type="password" name="prepass" id="prepass"><br><br>  

          <label for="newpass">New Password:</label>
          <input type="password" name="newpass" id="newpass "><br><br>  

          <input type="submit" value="submit" name="submit">
    </form>
   </div>
</body>
</html>
<?php
  if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['submit'])){
     $sql = "SELECT * FROM login_info";
      $result = mysqli_query($conn,$sql);
      while($rows = mysqli_fetch_assoc($result)){ 
        if($rows['Username'] == $_POST['username'] && $rows['Password'] == $_POST['prepass']){
            echo '<script>alert("Data is matched")</script>';
            $newpass = $_POST['newpass'];
            $sql = "UPDATE login_info SET Password = '$newpass' WHERE Username = 'Sk_Admin'";
            if(mysqli_query($conn,$sql)){
                echo '<script>alert("Password has Changed !"); </script>';
            }
            else{
                echo '<script>alert("NOT matched")</script>';
            }
        }
 }
}
}
  
?>